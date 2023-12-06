<?php

namespace CommonGateway\CustomerInteractionBundle\ActionHandler;

use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;
use CommonGateway\CustomerInteractionBundle\Service\CustomerInteractionService;
use CommonGateway\CustomerNotificationsBundle\Service\NotificationsService;

/**
 * The Handler for handling notifications.
 *
 * @author Conduction.nl <info@conduction.nl>, Wilco Louwerse <wilco@conduction.nl>
 *
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */
class ExtendHandler implements ActionHandlerInterface
{

    /**
     * The notifications service used by the handler
     *
     * @var CustomerInteractionService
     */
    private CustomerInteractionService $interactionService;


    /**
     * The constructor
     *
     * @param CustomerInteractionService $interactionService The interaction service
     */
    public function __construct(CustomerInteractionService $interactionService)
    {
        $this->interactionService = $interactionService;

    }//end __construct()


    /**
     * Returns the required configuration as a https://json-schema.org array.
     *
     * @return array The configuration that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://commongateway.nl/ActionHandler/ExtendHandler.ActionHandler.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'Extend ActionHandler',
            'description' => 'This handler adds subobjects from other sources to identificators.',
            'required'    => ['identificatorEntity'],
            'properties'  => [
                'identificatorEntity' => [
                    'type' => 'string',
                    'description' => 'The reference of the entity/schema that contains the identificator objects to extend.',
                    'example' => 'https://commongateway.nl/klant.identificator.schema.json',
                    'required' => true,
                ]
            ],
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
     * @SuppressWarnings("unused") Handlers are strict implementations
     */
    public function run(array $data, array $configuration): array
    {
        return $this->interactionService->extendHandler($data, $configuration);

    }//end run()


}//end class
