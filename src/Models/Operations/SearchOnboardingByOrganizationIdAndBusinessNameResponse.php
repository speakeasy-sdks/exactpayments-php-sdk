<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments\Models\Operations;


class SearchOnboardingByOrganizationIdAndBusinessNameResponse
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
     * **Not Found**\
     * 
     * \
     * When you'll get `404 Not Found` response:
     * - The  Organization doesn't exist. 
     * 
     * 
     * @var ?string $notFound
     */
	
    public ?string $notFound = null;
    
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
     * **Unauthorized**\
     * 
     * \
     * When you'll get `401 Unauthorized` response:
     * - The User or Application Token is invalid.
     * - The User or Application Token doesn't have the permission to view the Onboardings.
     * 
     * 
     * @var ?string $unauthorized
     */
	
    public ?string $unauthorized = null;
    
    /**
     * **OK**
     * 
     * @var ?array<\TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithoutPrincipal> $classes
     */
	
    public ?array $classes = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->headers = [];
		$this->internalServerError = null;
		$this->notFound = null;
		$this->serviceUnavailable = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->unauthorized = null;
		$this->classes = null;
	}
}
