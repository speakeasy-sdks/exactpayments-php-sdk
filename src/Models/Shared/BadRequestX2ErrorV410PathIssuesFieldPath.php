<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class BadRequestX2ErrorV410PathIssuesFieldPath
{
    /**
     * Message explaining the validation error.
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
    /**
     * Validation error code.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestX2ErrorV410PathIssuesFieldPathType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Shared\BadRequestX2ErrorV410PathIssuesFieldPathType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BadRequestX2ErrorV410PathIssuesFieldPathType $type = null;
    
    /**
     * Specific extra information that is reported about the error. This field will not yield any value for now and mostly an empty object.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestX2ErrorV410PathIssuesFieldPathVariant $variant
     */
	#[\JMS\Serializer\Annotation\SerializedName('variant')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Shared\BadRequestX2ErrorV410PathIssuesFieldPathVariant')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?BadRequestX2ErrorV410PathIssuesFieldPathVariant $variant = null;
    
	public function __construct()
	{
		$this->message = null;
		$this->type = null;
		$this->variant = null;
	}
}