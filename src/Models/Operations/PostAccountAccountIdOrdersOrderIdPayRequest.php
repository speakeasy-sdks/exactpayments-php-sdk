<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class PostAccountAccountIdOrdersOrderIdPayRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?PostAccountAccountIdOrdersOrderIdPayRequestBody $requestBody = null;
    
    /**
     * The Account identifier. Represents the Merchant that this operation is going to be executed for.
     * 
     * @var string $accountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountId')]
    public string $accountId;
    
    /**
     * The Order identifier.
     * 
     * @var string $orderId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=orderId')]
    public string $orderId;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->accountId = "";
		$this->orderId = "";
	}
}