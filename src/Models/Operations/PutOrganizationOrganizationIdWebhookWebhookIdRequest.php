<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class PutOrganizationOrganizationIdWebhookWebhookIdRequest
{
    /**
     * Fields that are updatable in the webhook definition.
     * 
     * @var \TheLogicStudio\ExactPayments\Models\Shared\UpdatableWebhookRequest $updatableWebhookRequest
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \TheLogicStudio\ExactPayments\Models\Shared\UpdatableWebhookRequest $updatableWebhookRequest;
    
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
    /**
     * The customers webhook definition Id
     * 
     * @var string $webhookId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=webhookId')]
    public string $webhookId;
    
	public function __construct()
	{
		$this->updatableWebhookRequest = new \TheLogicStudio\ExactPayments\Models\Shared\UpdatableWebhookRequest();
		$this->organizationId = "";
		$this->webhookId = "";
	}
}
