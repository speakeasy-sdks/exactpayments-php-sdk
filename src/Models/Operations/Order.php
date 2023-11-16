<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * Order - Order details response object.
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class Order
{
    /**
     * Order identifier associated with a Payment.
     * 
     * @var ?string $orderId
     */
	#[\JMS\Serializer\Annotation\SerializedName('orderId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $orderId = null;
    
    /**
     * Status of the payment.
     * 
     * @var ?string $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $status = null;
    
	public function __construct()
	{
		$this->orderId = null;
		$this->status = null;
	}
}
