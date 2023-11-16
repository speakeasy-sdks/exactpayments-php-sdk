<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * AccountPostPaymentPaymentsResponse503ResponseBody - **Service Unavailable**
 * 
 * 
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class AccountPostPaymentPaymentsResponse503ResponseBody
{
    /**
     * Code of the custom error.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Message explaining the custom error.
     * 
     * @var ?string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;
    
    /**
     * Request identifier in UUID format.
     * 
     * @var ?string $requestId
     */
	#[\JMS\Serializer\Annotation\SerializedName('requestId')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $requestId = null;
    
    /**
     * It is shows as custom error.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->code = null;
		$this->message = null;
		$this->requestId = null;
		$this->type = null;
	}
}
