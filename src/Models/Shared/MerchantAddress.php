<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class MerchantAddress
{
    /**
     * The city where the business is located.
     * 
     * @var string $city
     */
	#[\JMS\Serializer\Annotation\SerializedName('city')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $city;
    
    /**
     * The three-digit country code where the business is located. Refer to the three-digit country code defined in ISO 3166-1 alpha-3.
     * 
     * @var \TheLogicStudio\ExactPayments\Models\Shared\Country $country
     */
	#[\JMS\Serializer\Annotation\SerializedName('country')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\Country>')]
    public Country $country;
    
    /**
     * The two-digit country subdivision code where the business is located. Refer to the two-digit country subdivision code defined in  ISO 3166-2 for the countries listed in ISO 3166-1.
     * 
     * @var string $countrySubdivision
     */
	#[\JMS\Serializer\Annotation\SerializedName('countrySubdivision')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $countrySubdivision;
    
    /**
     * Street Address of the Business (Building number and Street name). PO Box is not accepted.
     * 
     * @var string $line1
     */
	#[\JMS\Serializer\Annotation\SerializedName('line1')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $line1;
    
    /**
     * Secondary address unit of the Business (For example: apartment, suite, room, or floor numbers). PO Box is not accepted.
     * 
     * @var ?string $line2
     */
	#[\JMS\Serializer\Annotation\SerializedName('line2')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $line2 = null;
    
    /**
     * The postal code where the business is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.
     * 
     * @var string $postalCode
     */
	#[\JMS\Serializer\Annotation\SerializedName('postalCode')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $postalCode;
    
	public function __construct()
	{
		$this->city = "";
		$this->country = \TheLogicStudio\ExactPayments\Models\Shared\Country::Usa;
		$this->countrySubdivision = "";
		$this->line1 = "";
		$this->line2 = null;
		$this->postalCode = "";
	}
}
