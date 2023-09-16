<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class CreateApplicationTokenResponse
{
    /**
     * **Created**
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\ApplicationTokenOutput $applicationToken
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\ApplicationTokenOutput $applicationToken = null;
    
    /**
     * **Bad Request**\
     * 
     * \
     * The request body contains a malformed request or is incomplete.
     * 
     * 
     * @var ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError $badRequestZodError
     */
	
    public ?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError $badRequestZodError = null;
    
	
    public string $contentType;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
    /**
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The Application doesn't exist.
     * - The User's Organization or Account doesn't exist.
     * 
     * 
     * @var ?string $notFound
     */
	
    public ?string $notFound = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?string $serviceUnavailable
     */
	
    public ?string $serviceUnavailable = null;
    
    /**
     * **Unauthorized**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - The User or Application Token is invalid.
     * - The User or Application Token doesn't have permission to create Application Tokens.
     * - The User's Organization or Account is disabled.
     * 
     * 
     * @var ?string $unauthorized
     */
	
    public ?string $unauthorized = null;
    
	public function __construct()
	{
		$this->applicationToken = null;
		$this->badRequestZodError = null;
		$this->contentType = "";
		$this->internalServerError = null;
		$this->notFound = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->serviceUnavailable = null;
		$this->unauthorized = null;
	}
}