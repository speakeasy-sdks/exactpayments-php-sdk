<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountCapturePaymentResponse
{
    /**
     * Payment Created
     * 
     * @var mixed $twoHundredAndOneApplicationJsonPayment
     */
	
    public mixed $twoHundredAndOneApplicationJsonPayment = null;
    
    /**
     * **Bad Request**\
     * 
     * When there are errors in the payload.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentResponseBody $fourHundredApplicationJsonObject
     */
	
    public ?AccountCapturePaymentResponseBody $fourHundredApplicationJsonObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentPaymentsResponseBody $fourHundredAndThreeApplicationJsonObject
     */
	
    public ?AccountCapturePaymentPaymentsResponseBody $fourHundredAndThreeApplicationJsonObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentPaymentsResponseResponseBody $fourHundredAndFourApplicationJsonObject
     */
	
    public ?AccountCapturePaymentPaymentsResponseResponseBody $fourHundredAndFourApplicationJsonObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentPaymentsResponse500ResponseBody $fiveHundredApplicationJsonObject
     */
	
    public ?AccountCapturePaymentPaymentsResponse500ResponseBody $fiveHundredApplicationJsonObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentPaymentsResponse503ResponseBody $fiveHundredAndThreeApplicationJsonObject
     */
	
    public ?AccountCapturePaymentPaymentsResponse503ResponseBody $fiveHundredAndThreeApplicationJsonObject = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse;
    
	public function __construct()
	{
		$this->twoHundredAndOneApplicationJsonPayment = null;
		$this->fourHundredApplicationJsonObject = null;
		$this->fourHundredAndThreeApplicationJsonObject = null;
		$this->fourHundredAndFourApplicationJsonObject = null;
		$this->fiveHundredApplicationJsonObject = null;
		$this->fiveHundredAndThreeApplicationJsonObject = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
