<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class NewPaymentPaymentMethod1GooglePay
{
    /**
     * The cryptogram for tokenized cards. MUST be supplied if returned by Google Pay.
     * 
     * @var ?string $cryptogram
     */
	#[\JMS\Serializer\Annotation\SerializedName('cryptogram')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cryptogram = null;
    
    /**
     * Not normally returned by Google Pay, but should be included if present in the Google Pay response.
     * 
     * @var ?string $cvd
     */
	#[\JMS\Serializer\Annotation\SerializedName('cvd')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cvd = null;
    
    /**
     * Expiration month for the card.
     * 
     * @var string $expiryMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryMonth')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiryMonth;
    
    /**
     * Expiration year for the card.
     * 
     * @var string $expiryYear
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryYear')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiryYear;
    
    /**
     * Card number.
     * 
     * @var string $number
     */
	#[\JMS\Serializer\Annotation\SerializedName('number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $number;
    
	public function __construct()
	{
		$this->cryptogram = null;
		$this->cvd = null;
		$this->expiryMonth = "";
		$this->expiryYear = "";
		$this->number = "";
	}
}