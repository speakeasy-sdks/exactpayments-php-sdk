<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;

use \TheLogicStudio\ExactPayments\Utils\SpeakeasyMetadata;
class AccountRefundPaymentRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\TheLogicStudio\ExactPayments\Models\Shared\ReferencedPayment $referencedPayment = null;
    
    /**
     * The Account identifier. Represents the Merchant that this operation is going to be executed for.
     * 
     * @var string $accountId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=accountId')]
    public string $accountId;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=paymentId')]
    public string $paymentId;
    
	public function __construct()
	{
		$this->referencedPayment = null;
		$this->accountId = "";
		$this->paymentId = "";
	}
}
