<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


class UpdatableAnticipatedTransAmounts
{
    /**
     * Anticipated Monthly Volume.
     * 
     * @var ?float $anticipatedMonthlyVolume
     */
	#[\JMS\Serializer\Annotation\SerializedName('anticipatedMonthlyVolume')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $anticipatedMonthlyVolume = null;
    
    /**
     * Average Ticket Size.
     * 
     * @var ?float $averageTicketSize
     */
	#[\JMS\Serializer\Annotation\SerializedName('averageTicketSize')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $averageTicketSize = null;
    
    /**
     * Max Ticket Size.
     * 
     * @var ?float $maxTicketSize
     */
	#[\JMS\Serializer\Annotation\SerializedName('maxTicketSize')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $maxTicketSize = null;
    
	public function __construct()
	{
		$this->anticipatedMonthlyVolume = null;
		$this->averageTicketSize = null;
		$this->maxTicketSize = null;
	}
}