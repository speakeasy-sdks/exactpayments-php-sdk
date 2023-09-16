<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest
{
    /**
     * The Organization identifier.
     * 
     * @var string $organizationId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public string $organizationId;
    
    /**
     * The Workflow identifier.
     * 
     * @var string $workflowId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=workflowId')]
    public string $workflowId;
    
	public function __construct()
	{
		$this->organizationId = "";
		$this->workflowId = "";
	}
}