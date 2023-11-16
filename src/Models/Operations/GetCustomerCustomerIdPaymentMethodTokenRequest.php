<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class GetCustomerCustomerIdPaymentMethodTokenRequest
{
    /**
     * The Customer identifier. Represents the Customer that this operation is going to be executed for.
     * 
     * @var string $customerId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=customerId')]
    public string $customerId;
    
    /**
     * Payment token Id
     * 
     * @var string $tokenId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=tokenId')]
    public string $tokenId;
    
	public function __construct()
	{
		$this->customerId = "";
		$this->tokenId = "";
	}
}
