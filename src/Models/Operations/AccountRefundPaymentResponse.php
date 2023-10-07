<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountRefundPaymentResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Payment Created
     * 
     * @var mixed $payment
     */
	
    public mixed $payment = null;
    
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
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Bad Request**\
     * 
     * When there are errors in the payload.
     * 
     * 
     * @var ?array<string, mixed> $accountRefundPayment400ApplicationJSONObject
     */
	
    public ?array $accountRefundPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?array<string, mixed> $accountRefundPayment403ApplicationJSONObject
     */
	
    public ?array $accountRefundPayment403ApplicationJSONObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?array<string, mixed> $accountRefundPayment404ApplicationJSONObject
     */
	
    public ?array $accountRefundPayment404ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountRefundPayment500ApplicationJSONObject
     */
	
    public ?array $accountRefundPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountRefundPayment503ApplicationJSONObject
     */
	
    public ?array $accountRefundPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->accountRefundPayment400ApplicationJSONObject = null;
		$this->accountRefundPayment403ApplicationJSONObject = null;
		$this->accountRefundPayment404ApplicationJSONObject = null;
		$this->accountRefundPayment500ApplicationJSONObject = null;
		$this->accountRefundPayment503ApplicationJSONObject = null;
	}
}
