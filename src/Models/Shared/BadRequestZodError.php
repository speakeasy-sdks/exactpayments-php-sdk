<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class BadRequestZodError
{
    /**
     * List of documented issues that occurred during validation.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\ZodError> $issues
     */
	#[\JMS\Serializer\Annotation\SerializedName('issues')]
    #[\JMS\Serializer\Annotation\Type('array<TheLogicStudio\ExactPayments\Models\Shared\ZodError>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $issues = null;
    
    /**
     * The error type. It has a fixed value of `ZodError` for `400 Bad Request`.
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->issues = null;
		$this->name = null;
	}
}
