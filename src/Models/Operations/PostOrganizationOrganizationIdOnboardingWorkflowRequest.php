<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class PostOrganizationOrganizationIdOnboardingWorkflowRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflow $underwritingWorkflowRequestCreateWorkflow;
    
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
	public function __construct()
	{
		$this->underwritingWorkflowRequestCreateWorkflow = new \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflow();
		$this->organizationId = "";
	}
}