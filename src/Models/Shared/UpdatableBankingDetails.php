<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * UpdatableBankingDetails - Banking details of the Account for ACH Payments, this field will be available ony for the Onboarding Applications submitted with the Banking Details.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class UpdatableBankingDetails
{
    /**
     * Bank Name
     * 
     * @var ?string $bankName
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bankName = null;
    
    /**
     * A bank transit number is a unique 5-digit number used to identify the bank branch in Canada. Only applicable for Organization or Account based in Canada.
     * 
     * @var ?string $bankNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('bankNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bankNumber = null;
    
    /**
     * Demand Deposit Account (or) Checking Account number.
     * 
     * @var ?string $ddaNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('ddaNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ddaNumber = null;
    
    /**
     * 9-digit Routing Number for the Organization or Account based in USA (or) 3-digit Institution number for the Organization or Account based in Canada.
     * 
     * @var ?string $routingNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('routingNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $routingNumber = null;
    
	public function __construct()
	{
		$this->bankName = null;
		$this->bankNumber = null;
		$this->ddaNumber = null;
		$this->routingNumber = null;
	}
}
