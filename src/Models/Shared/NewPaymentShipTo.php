<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class NewPaymentShipTo
{
    /**
     * The customer's billing address. Will be used for AVS checks so postal/zip code is the minimum data required.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\NewPaymentSchemasAddress $address
     */
	#[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\NewPaymentSchemasAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NewPaymentSchemasAddress $address = null;
    
    /**
     * Customer number.
     * 
     * @var ?string $customerNumber
     */
	#[\JMS\Serializer\Annotation\SerializedName('customerNumber')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $customerNumber = null;
    
    /**
     * Customer email.
     * 
     * @var ?string $email
     */
	#[\JMS\Serializer\Annotation\SerializedName('email')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $email = null;
    
    /**
     * Customer name.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * Customer phone number.
     * 
     * @var ?string $phone
     */
	#[\JMS\Serializer\Annotation\SerializedName('phone')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $phone = null;
    
    /**
     * `H` = Home, `W` = Work, `D` = Day, `N` = Night. Phone type is required when a phone number is supplied.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\NewPaymentSchemasPhoneType $phoneType
     */
	#[\JMS\Serializer\Annotation\SerializedName('phoneType')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\NewPaymentSchemasPhoneType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?NewPaymentSchemasPhoneType $phoneType = null;
    
	public function __construct()
	{
		$this->address = null;
		$this->customerNumber = null;
		$this->email = null;
		$this->name = null;
		$this->phone = null;
		$this->phoneType = null;
	}
}
