<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * AccountGetPayment200ApplicationJSONPaymentCaptureDetails - The Payment identifiers of any capture transactions.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class AccountGetPayment200ApplicationJSONPaymentCaptureDetails
{
    /**
     * Capture details of the Payment.
     * 
     * @var ?array<string> $captures
     */
	#[\JMS\Serializer\Annotation\SerializedName('captures')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $captures = null;
    
    /**
     * Remaining amount of the capture details.
     * 
     * @var ?float $remaining
     */
	#[\JMS\Serializer\Annotation\SerializedName('remaining')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $remaining = null;
    
	public function __construct()
	{
		$this->captures = null;
		$this->remaining = null;
	}
}
