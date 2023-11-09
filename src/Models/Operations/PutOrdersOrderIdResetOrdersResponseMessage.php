<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PutOrdersOrderIdResetOrdersResponseMessage
{
    /**
     * $messages
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetMessages> $messages
     */
	#[\JMS\Serializer\Annotation\SerializedName('messages')]
    #[\JMS\Serializer\Annotation\Type('array<enum<TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetMessages>>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $messages = null;
    
	public function __construct()
	{
		$this->messages = null;
	}
}