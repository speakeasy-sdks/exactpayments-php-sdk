<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * AcceptanceMethods - The method by which the business accepts the payments. The total value of all the methods can't exceed 100 percent.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class AcceptanceMethods
{
    /**
     * Percentage of payments accepted through Online websites. Online payments made through hosted payment pages.
     * 
     * @var float $internet
     */
	#[\JMS\Serializer\Annotation\SerializedName('internet')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $internet;
    
    /**
     * Percentage of payments accepted through Keyed in card details. Card payment where a person manually types in the card information.
     * 
     * @var float $keyed
     */
	#[\JMS\Serializer\Annotation\SerializedName('keyed')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $keyed;
    
    /**
     * Percentage of payments accepted through MOTO [Mail Order / Telephone Order].
     * 
     * @var float $moto
     */
	#[\JMS\Serializer\Annotation\SerializedName('moto')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $moto;
    
    /**
     * Percentage of payments accepted through Swipe. Swipe are POS / Payment transactions made through Card reader.
     * 
     * @var float $swipe
     */
	#[\JMS\Serializer\Annotation\SerializedName('swipe')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $swipe;
    
	public function __construct()
	{
		$this->internet = 0;
		$this->keyed = 0;
		$this->moto = 0;
		$this->swipe = 0;
	}
}
