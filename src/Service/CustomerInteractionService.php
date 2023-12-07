<?php
/**
 * Service for business logic in the customer interaction bundle.
 *
 * @author Conduction.nl <info@conduction.nl>, Robert Zondervan <robert@conduction.nl>
 *
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */

namespace CommonGateway\CustomerInteractionBundle\Service;

use Adbar\Dot;
use App\Entity\Gateway as Source;
use CommonGateway\CoreBundle\Service\CallService;
use Doctrine\ORM\EntityManagerInterface;
use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class CustomerInteractionService
{

    /**
     * The action configuration.
     *
     * @var array
     */
    private array $configuration;

    /**
     * The call service.
     *
     * @var CallService
     */
    private CallService $callService;

    /**
     * The entity manager.
     *
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * The request stack.
     *
     * @var RequestStack
     */
    private RequestStack $requestStack;


    /**
     * The service constructor.
     *
     * @param CallService            $callService   the call service
     * @param EntityManagerInterface $entityManager the entity manager
     * @param RequestStack           $requestStack  the request stack
     */
    public function __construct(
        CallService $callService,
        EntityManagerInterface $entityManager,
        RequestStack $requestStack
    ) {
        $this->callService   = $callService;
        $this->entityManager = $entityManager;
        $this->requestStack  = $requestStack;

    }//end __construct()


    /**
     * Find a source for a given url.
     *
     * @param string $url      The url of the object to be found.
     * @param string $endpoint The resulting endpoint (the remainder of the path)
     *
     * @return Source|null The resulting source.
     *
     * @throws \Safe\Exceptions\UrlException
     */
    private function getSource(string $url, ?string &$endpoint): ?Source
    {
        // 1. Get the domain from the url
        $parse    = \Safe\parse_url($url);
        $location = $parse['scheme'].'://'.$parse['host'];

        // 2.a Try to establish a source for the domain
        $source = $this->entityManager->getRepository('App:Gateway')->findOneBy(['location' => $location]);

        // 2.b The source might be on a path e.g. /v1 so if whe cant find a source let try to cycle
        if ($source instanceof Source === false && isset($parse['path']) === true) {
            foreach (explode('/', $parse['path']) as $pathPart) {
                if ($pathPart !== '') {
                    $location = $location.'/'.$pathPart;
                }

                $source = $this->entityManager->getRepository('App:Gateway')->findOneBy(['location' => $location]);
                if ($source !== null) {
                    $endpoint = str_replace($location, '', $url);
                    break;
                }
            }
        }

        if ($source instanceof Source === false) {
            return null;
        }

        return $source;

    }//end getSource()


    /**
     * Extend an identificator object with the subobject.
     *
     * @param array $identificator The identificator object.
     *
     * @return array The resulting identificator object.
     *
     * @throws \Exception
     */
    public function extendIdentificator(array $identificator): array
    {
        // Build the object url.
        $url = $identificator['register'].'/'.$identificator['objecttype'].'/'.$identificator['objectId'];

        // Fetch the source.
        $source = $this->getSource($url, $endpoint);

        if ($source === null) {
            return $identificator;
        }

        // Call the source and decode the result.
        $response = $this->callService->call($source, $endpoint);
        $object   = $this->callService->decodeResponse($source, $response);

        // Add the result to the object.
        $identificator['object'] = $object;

        return $identificator;

    }//end extendIdentificator()


    /**
     * Recursively walk trough the result of the original request and extend the identificators.
     *
     * @param array $result The result to check and update.
     *
     * @return array The updated result.
     */
    public function recursiveFindIdentificators(array $result, array $extend=[]): array
    {
        if (array_key_exists('_self', $result) === true
            && $result['_self']['schema']['ref'] === $this->configuration['identificatorEntity']
        ) {
            $result = $this->extendIdentificator($result);

            return $result;
        }

        foreach ($result as $key => $item) {
            if ($key !== '_self'
                && is_array($item) === true
                && in_array($key, array_keys($extend)) === true
            ) {
                $result[$key] = $this->recursiveFindIdentificators($item, $extend[$key]);
            }
        }

        return $result;

    }//end recursiveFindIdentificators()


    /**
     * Extend requests to external sources
     *
     * @param array $data          The result of the original request.
     * @param array $configuration The configuration of this action, contains the entity that should be extended.
     *
     * @return array The updated data.
     */
    public function extendHandler(array $data, array $configuration): array
    {
        $this->configuration = $configuration;

        $url  = \Safe\parse_url($this->requestStack->getCurrentRequest()->getUri());
        $path = explode('/', $url['path']);

        if ($this->requestStack->getCurrentRequest()->getMethod() !== 'GET'
            || Uuid::isValid(end($path)) !== true
            || $this->requestStack->getCurrentRequest()->query->has('_extend') === false
        ) {
            return $data;
        }

        $extendQuery = $this->requestStack->getCurrentRequest()->query->get('_extend');

        $extendDot = new Dot();
        foreach ($extendQuery as $extend) {
            $extendDot->add($extend, []);
        }

        $extend = $extendDot->jsonSerialize();

        // Fetch the response and check if it's valid.
        $response = $data['response'];
        if ($response instanceof Response === false) {
            return $data;
        }

        // Get the result from the original request.
        $result = \Safe\json_decode($response->getContent(), true);

        // Find the extendible identificators and extend them.
        $updatedResult = \Safe\json_encode($this->recursiveFindIdentificators($result, $extend));

        // Set the updated content.
        $response->setContent($updatedResult);
        $data['response'] = $response;

        return $data;

    }//end extendHandler()


}//end class
