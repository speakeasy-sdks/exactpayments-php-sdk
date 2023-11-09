<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostPaymentPathIssues
{
    /**
     * $details
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentDetails> $details
     */
	#[\JMS\Serializer\Annotation\SerializedName('details')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PostPaymentDetails>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $details = null;
    
    /**
     * It shows which field is/are missing.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentField $field
     */
	#[\JMS\Serializer\Annotation\SerializedName('field')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostPaymentField>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostPaymentField $field = null;
    
    /**
     * It shows what is expecting.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentType $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\PostPaymentType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PostPaymentType $type = null;
    
	public function __construct()
	{
		$this->details = null;
		$this->field = null;
		$this->type = null;
	}
}