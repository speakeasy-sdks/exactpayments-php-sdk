<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


/**
 * GetPaymentPaymentsResponseBody - **Not Found**\
 * 
 * \
 * When you'll get `401 Unauthorized` response:
 * - When there are no Accounts/Orders/Payment found.
 * 
 * 
 * @package TheLogicStudio\ExactPayments\Models\Operations
 * @access public
 */
class GetPaymentPaymentsResponseBody
{
    /**
     * Code of the api error.
     * 
     * @var ?string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $code = null;
    
    /**
     * Message explaining the error.
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentPaymentsMessage $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('enum<TheLogicStudio\ExactPayments\Models\Operations\GetPaymentPaymentsMessage>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?GetPaymentPaymentsMessage $message = null;
    
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
     * Type of the error.
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
