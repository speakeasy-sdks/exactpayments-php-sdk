<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class NewPaymentPaymentMethod1CreditCard
{
    /**
     * Card holder name on the credit card.
     * 
     * @var string $cardholder
     */
	#[\JMS\Serializer\Annotation\SerializedName('cardholder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $cardholder;
    
    /**
     * CVV or CVD for the credit card.
     * 
     * @var ?string $cvd
     */
	#[\JMS\Serializer\Annotation\SerializedName('cvd')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cvd = null;
    
    /**
     * CVD indicator for the credit card.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\NewPaymentPaymentMethod1CreditCardCvdIndicator $cvdIndicator
     */
	#[\JMS\Serializer\Annotation\SerializedName('cvdIndicator')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\NewPaymentPaymentMethod1CreditCardCvdIndicator>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NewPaymentPaymentMethod1CreditCardCvdIndicator $cvdIndicator = null;
    
    /**
     * Expiration month for the credit card.
     * 
     * @var string $expiryMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryMonth')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiryMonth;
    
    /**
     * Expiration year for the credit card.
     * 
     * @var string $expiryYear
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryYear')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $expiryYear;
    
    /**
     * Credit card number.
     * 
     * @var string $number
     */
	#[\JMS\Serializer\Annotation\SerializedName('number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $number;
    
	public function __construct()
	{
		$this->cardholder = "";
		$this->cvd = null;
		$this->cvdIndicator = null;
		$this->expiryMonth = "";
		$this->expiryYear = "";
		$this->number = "";
	}
}
