<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class Metadata
{
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdOrdersResponseMessage')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetAccountAccountIdOrdersOrderIdOrdersResponseMessage $message = null;
    
	public function __construct()
	{
		$this->message = null;
	}
}