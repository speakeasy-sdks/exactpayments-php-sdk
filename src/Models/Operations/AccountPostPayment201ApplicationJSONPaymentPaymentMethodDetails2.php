<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2
{
    /**
     * Card brand of the card, for example, visa, master.
     * 
     * @var ?string $cardBrand
     */
	#[\JMS\Serializer\Annotation\SerializedName('cardBrand')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cardBrand = null;
    
    /**
     * Card holder name.
     * 
     * @var ?string $cardholder
     */
	#[\JMS\Serializer\Annotation\SerializedName('cardholder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $cardholder = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('cvdCheck')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2CvdCheck')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2CvdCheck $cvdCheck = null;
    
    /**
     * Expiration month for the card.
     * 
     * @var ?string $expiryMonth
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryMonth')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiryMonth = null;
    
    /**
     * Expiration year for the card.
     * 
     * @var ?string $expiryYear
     */
	#[\JMS\Serializer\Annotation\SerializedName('expiryYear')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiryYear = null;
    
    /**
     * Last 4 digits of the card.
     * 
     * @var ?string $last4
     */
	#[\JMS\Serializer\Annotation\SerializedName('last4')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $last4 = null;
    
    /**
     * Payment method token for the Payment.
     * 
     * @var ?string $token
     */
	#[\JMS\Serializer\Annotation\SerializedName('token')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $token = null;
    
    /**
     * Type of the token.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType $tokenType
     */
	#[\JMS\Serializer\Annotation\SerializedName('tokenType')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountPostPayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType $tokenType = null;
    
	public function __construct()
	{
		$this->cardBrand = null;
		$this->cardholder = null;
		$this->cvdCheck = null;
		$this->expiryMonth = null;
		$this->expiryYear = null;
		$this->last4 = null;
		$this->token = null;
		$this->tokenType = null;
	}
}
