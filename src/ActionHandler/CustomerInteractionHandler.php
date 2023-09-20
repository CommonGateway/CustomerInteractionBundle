<?php

namespace CommonGateway\CustomerInteractionBundle\ActionHandler;

use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;
use CommonGateway\CustomerInteractionBundle\Service\CustomerInteractionService;

/**
 * An example handler for the per store.
 *
 * @author Conduction.nl <info@conduction.nl>
 *
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */
class CustomerInteractionHandler implements ActionHandlerInterface
{

    /**
     * The pet store service used by the handler
     *
     * @var CustomerInteractionService
     */
    private CustomerInteractionService $service;


    /**
     * The constructor
     *
     * @param CustomerInteractionService $service The pet store service
     */
    public function __construct(CustomerInteractionService $service)
    {
        $this->service = $service;

    }//end __construct()


    /**
     * Returns the required configuration as a https://json-schema.org array.
     *
     * @return array The configuration that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://example.com/ActionHandler/CustomerInteractionHandler.ActionHandler.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'CustomerInteraction ActionHandler',
            'description' => 'This handler returns a welcoming string',
            'required'    => [],
            'properties'  => [],
        ];

    }//end getConfiguration()


    /**
     * This function runs the service.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @return array
     *
     * @SuppressWarnings("unused") Handlers ara strict implementations
     */
    public function run(array $data, array $configuration): array
    {
        return $this->service->customerInteractionHandler($data, $configuration);

    }//end run()


}//end class
