<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountVoidPaymentResponse
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
     * @var ?array<string, mixed> $accountVoidPayment400ApplicationJSONObject
     */
	
    public ?array $accountVoidPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?array<string, mixed> $accountVoidPayment403ApplicationJSONObject
     */
	
    public ?array $accountVoidPayment403ApplicationJSONObject = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - When there are no Accounts/Orders/Payment found.
     * 
     * 
     * @var ?array<string, mixed> $accountVoidPayment404ApplicationJSONObject
     */
	
    public ?array $accountVoidPayment404ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountVoidPayment500ApplicationJSONObject
     */
	
    public ?array $accountVoidPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountVoidPayment503ApplicationJSONObject
     */
	
    public ?array $accountVoidPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->accountVoidPayment400ApplicationJSONObject = null;
		$this->accountVoidPayment403ApplicationJSONObject = null;
		$this->accountVoidPayment404ApplicationJSONObject = null;
		$this->accountVoidPayment500ApplicationJSONObject = null;
		$this->accountVoidPayment503ApplicationJSONObject = null;
	}
}
