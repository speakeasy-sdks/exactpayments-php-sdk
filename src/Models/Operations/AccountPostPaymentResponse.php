<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountPostPaymentResponse
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
     * When there are errors in the payload
     * 
     * 
     * @var ?array<string, mixed> $accountPostPayment400ApplicationJSONObject
     */
	
    public ?array $accountPostPayment400ApplicationJSONObject = null;
    
    /**
     * **Access Denied**\
     * 
     * Credentials supplied do not grant access to the requested resource.
     * 
     * 
     * @var ?array<string, mixed> $accountPostPayment403ApplicationJSONObject
     */
	
    public ?array $accountPostPayment403ApplicationJSONObject = null;
    
    /**
     * **Unprocessable Content**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountPostPayment422ApplicationJSONObject
     */
	
    public ?array $accountPostPayment422ApplicationJSONObject = null;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountPostPayment500ApplicationJSONObject
     */
	
    public ?array $accountPostPayment500ApplicationJSONObject = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?array<string, mixed> $accountPostPayment503ApplicationJSONObject
     */
	
    public ?array $accountPostPayment503ApplicationJSONObject = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->payment = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->accountPostPayment400ApplicationJSONObject = null;
		$this->accountPostPayment403ApplicationJSONObject = null;
		$this->accountPostPayment422ApplicationJSONObject = null;
		$this->accountPostPayment500ApplicationJSONObject = null;
		$this->accountPostPayment503ApplicationJSONObject = null;
	}
}
