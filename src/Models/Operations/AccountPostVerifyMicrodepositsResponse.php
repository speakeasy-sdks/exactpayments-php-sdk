<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class AccountPostVerifyMicrodepositsResponse
{
	
    public string $contentType;
    
    /**
     * Example response
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentAchSchema $paymentAchSchema
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\PaymentAchSchema $paymentAchSchema = null;
    
    /**
     * Problems with the request
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\RequestFailure $requestFailure
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\RequestFailure $requestFailure = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->paymentAchSchema = null;
		$this->requestFailure = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}