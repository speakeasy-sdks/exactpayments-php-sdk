<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace TheLogicStudio\ExactPayments;

class MerchantOnboarding 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Create Onboarding Application
     * 
     * Create a new Onboarding Application for the new Account or Sub Organization.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest $request
     * @return \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponse
     */
	public function createOnboarding(
        \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest $request,
    ): \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding', \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "onboardingRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingCreateResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\OnboardingCreateResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createOnboarding400ApplicationJSONOneOf = $serializer->deserialize((string)$httpResponse->getBody(), 'mixed', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->createOnboarding404ApplicationJSONObject = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Operations\CreateOnboarding404ApplicationJSON', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Delete Onboarding
     * 
     * Delete a specific Onboarding Application for the given Organization and Onboarding Identifiers.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdResponse
     */
	public function deleteOnboardingById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding/{onboardingId}', \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'text/plain';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Filter Options
     * 
     * Retrieve a list of options that can be used as a filter when retrieving the Onboarding Applications associated to the given Organization Identifier.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsResponse
     */
	public function listFilterOptions(
        ?\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding/filters', \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->filterOnboardings = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\FilterOnboardings', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Merchant Category Codes
     * 
     * Retrieve the list of Merchant Category Codes supported by Exact Payments.
     * 
     * @return \TheLogicStudio\ExactPayments\Models\Operations\ListMerchantCategoryCodesResponse
     */
	public function listMerchantCategoryCodes(
    ): \TheLogicStudio\ExactPayments\Models\Operations\ListMerchantCategoryCodesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/mcc');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\ListMerchantCategoryCodesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->mccs = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\Mcc>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Onboardings by Organization
     * 
     * Retrieve the list of Onboarding Applications associated for the given Organization Identifier.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationResponse
     */
	public function listOnboardingByOrganization(
        ?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding', \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingWithoutPrincipals = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithoutPrincipal>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * List Onboardings
     * 
     * Retrieve the list of Onboarding Applications under the session account.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsResponse
     */
	public function listOnboardings(
        ?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/onboarding');
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingWithoutPrincipals = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithoutPrincipal>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Retrieve Onboarding
     * 
     * Retrieve a specific Onboarding Application for the given Organization and Onboarding identifier.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdResponse
     */
	public function retrieveOnboardingById(
        ?\TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding/{onboardingId}', \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingWithPrincipalResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithPrincipalResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Search Onboarding by Business Name
     * 
     * Retrieve the list of Onboarding Applications submitted under your Organization matching the Business Name provided as a search parameter.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameResponse
     */
	public function searchOnboardingByBusinessName(
        ?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/onboarding/search/{businessName}', \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingWithoutPrincipals = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithoutPrincipal>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Search Onboarding by Organization identifier and Business Name
     * 
     * Retrieve the list of Onboarding Applications matching the Business Name provided as a search parameter for the given Organization identifier.
     * 
     * @param \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest $request
     * @param \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameSecurity $security
     * @return \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameResponse
     */
	public function searchOnboardingByOrganizationIdAndBusinessName(
        ?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest $request,
        \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameSecurity $security,
    ): \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/organization/{organizationId}/onboarding/search/{businessName}', \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, text/plain;q=0';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $client = Utils\Utils::configureSecurityClient($this->sdkConfiguration->defaultClient, $security);
        $httpResponse = $client->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->onboardingWithoutPrincipals = $serializer->deserialize((string)$httpResponse->getBody(), 'array<TheLogicStudio\ExactPayments\Models\Shared\OnboardingWithoutPrincipal>', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->unauthorized = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->notFound = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 500) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->internalServerError = $httpResponse->getBody()->getContents();
            }
        }
        else if ($httpResponse->getStatusCode() === 503) {
            if (Utils\Utils::matchContentType($contentType, 'text/plain')) {
                $response->serviceUnavailable = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
}