<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk;

class PaymentGroups 
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
     * Retrieve all payment groups
     * 
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindAllResponse
     */
	public function paymentGroupsControllerFindAll(
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindAllResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindAllResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
        }

        return $response;
    }
	
    /**
     * Create a new payment group
     * 
     * @param \kohortpay\sdk\Models\Components\CreatePaymentGroupDto $request
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCreateResponse
     */
	public function paymentGroupsControllerCreate(
        \kohortpay\sdk\Models\Components\CreatePaymentGroupDto $request,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCreateResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCreateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201 or $httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
	
    /**
     * Retrieve a payment group by id
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneResponse
     */
	public function paymentGroupsControllerFindOne(
        string $id,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerFindOneResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Update a payment group by id
     * 
     * @param string $id
     * @param \kohortpay\sdk\Models\Components\UpdatePaymentGroupDto $updatePaymentGroupDto
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateResponse
     */
	public function paymentGroupsControllerUpdate(
        string $id,
        \kohortpay\sdk\Models\Components\UpdatePaymentGroupDto $updatePaymentGroupDto,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateRequest();
        $request->id = $id;
        $request->updatePaymentGroupDto = $updatePaymentGroupDto;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updatePaymentGroupDto", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerUpdateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
	
    /**
     * Retrieve participants of a payment group by id
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsResponse
     */
	public function paymentGroupsControllerParticipants(
        string $id,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}/participants', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerParticipantsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 404) {
        }

        return $response;
    }
	
    /**
     * Cancel a payment group by id
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelResponse
     */
	public function paymentGroupsControllerCancel(
        string $id,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}/cancel', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerCancelResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
	
    /**
     * Expire a payment group by id
     * 
     * @param string $id
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireResponse
     */
	public function paymentGroupsControllerExpire(
        string $id,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireRequest();
        $request->id = $id;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}/expire', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerExpireResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
	
    /**
     * Validate a payment group by id
     * 
     * @param string $id
     * @param \kohortpay\sdk\Models\Components\ValidatePaymentGroupDto $validatePaymentGroupDto
     * @return \kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateResponse
     */
	public function paymentGroupsControllerValidate(
        string $id,
        \kohortpay\sdk\Models\Components\ValidatePaymentGroupDto $validatePaymentGroupDto,
    ): \kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateResponse
    {
        $request = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateRequest();
        $request->id = $id;
        $request->validatePaymentGroupDto = $validatePaymentGroupDto;
        
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/payment-groups/{id}/validate', \kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "validatePaymentGroupDto", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \kohortpay\sdk\Models\Operations\PaymentGroupsControllerValidateResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200 or $httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
}