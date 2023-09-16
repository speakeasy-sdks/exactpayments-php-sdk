<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Shared;


/**
 * UnderwritingRuleOptions - Values must be between 0 and 100. Min < Max.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Shared
 * @access public
 */
class UnderwritingRuleOptions
{
    /**
     * Maximum threshold that will be used as criteria in the condition; this value is inclusive. Maximum value (max) must be greater than Minimum value (min).
     * 
     * @var float $max
     */
	#[\JMS\Serializer\Annotation\SerializedName('max')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $max;
    
    /**
     * Minimum threshold that will be used as criteria in the condition; this value is inclusive. Minimum value (min) must be less than Maximum value (max).
     * 
     * @var float $min
     */
	#[\JMS\Serializer\Annotation\SerializedName('min')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $min;
    
	public function __construct()
	{
		$this->max = 0;
		$this->min = 0;
	}
}