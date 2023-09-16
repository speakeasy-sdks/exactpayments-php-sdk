<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class MicroDepositVerificationRequest
{
    /**
     * Amount in smallest currency unit, eg: cents.
     * 
     * @var ?int $amount1
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount1')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount1 = null;
    
    /**
     * Amount in smallest currency unit, eg: cents.
     * 
     * @var ?int $amount2
     */
	#[\JMS\Serializer\Annotation\SerializedName('amount2')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $amount2 = null;
    
	public function __construct()
	{
		$this->amount1 = null;
		$this->amount2 = null;
	}
}