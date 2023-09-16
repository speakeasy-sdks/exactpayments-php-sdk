<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class OnboardingRetryRuleRequest
{
	#[\JMS\Serializer\Annotation\SerializedName('ruleName')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $ruleName;
    
	public function __construct()
	{
		$this->ruleName = "";
	}
}