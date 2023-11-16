<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class PostCreateNotesRequestBody
{
    /**
     * The content of the Note posted.
     * 
     * @var string $note
     */
	#[\JMS\Serializer\Annotation\SerializedName('note')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $note;
    
    /**
     * Set to `true` if you're creating a Note for an already deleted Onboarding Application.
     * 
     * @var ?bool $onboardingIsDeleted
     */
	#[\JMS\Serializer\Annotation\SerializedName('onboardingIsDeleted')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $onboardingIsDeleted = null;
    
	public function __construct()
	{
		$this->note = "";
		$this->onboardingIsDeleted = null;
	}
}
