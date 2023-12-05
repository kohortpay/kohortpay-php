<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk;

class CheckoutSessionsAPI 
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
     * Retrieve all checkout sessions for the current organization and livemode.
     * 
     * @return \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindAllResponse
     */
	public function checkoutSessionsControllerFindAll(
    ): \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindAllResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/checkout-sessions');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindAllResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\BadRequestResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\UnauthorizedException', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->error = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\Error', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Create a new checkout session.
     * 
     * @param \kohortpay\sdk\Models\Components\CreateCheckoutSessionDto $request
     * @return \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerCreateResponse
     */
	public function checkoutSessionsControllerCreate(
        \kohortpay\sdk\Models\Components\CreateCheckoutSessionDto $request,
    ): \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerCreateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/checkout-sessions');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerCreateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\BadRequestResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\UnauthorizedException', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\NotFoundException', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Retrieve a checkout session by ID for the current organization and livemode.
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneResponse
     */
	public function checkoutSessionsControllerFindOne(
        string $id,
    ): \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/checkout-sessions/{id}', \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerFindOneResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\UnauthorizedException', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\NotFoundException', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Expire a checkout session by ID for the current organization and livemode.
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireResponse
     */
	public function checkoutSessionsControllerExpire(
        string $id,
    ): \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/checkout-sessions/{id}/expire', \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\CheckoutSessionsControllerExpireResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedException = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\UnauthorizedException', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'kohortpay\sdk\Models\Components\BadRequestResponse', 'json');
            }
        }

        return $response;
    }
}