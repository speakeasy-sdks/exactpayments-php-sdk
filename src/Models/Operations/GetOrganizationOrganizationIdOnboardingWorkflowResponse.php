<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class GetOrganizationOrganizationIdOnboardingWorkflowResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * $headers
     * 
     * @var array<string, array<string>> $headers
     */
	
    public array $headers;
    
    /**
     * **Internal Server Error**
     * 
     * 
     * 
     * @var ?string $internalServerError
     */
	
    public ?string $internalServerError = null;
    
    /**
     * **Service Unavailable**
     * 
     * 
     * 
     * @var ?string $serviceUnavailable
     */
	
    public ?string $serviceUnavailable = null;
    
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
    
    /**
     * List of the active underwriting workflows of the PayFac.
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowResponse> $classes
     */
	
    public ?array $classes = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = [];
		$this->internalServerError = null;
		$this->serviceUnavailable = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->classes = null;
	}
}
