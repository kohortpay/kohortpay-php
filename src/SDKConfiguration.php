<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Components\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '0.1.0';
	public string $sdkVersion = '0.1.3';
	public string $genVersion = '2.210.3';
	public string $userAgent = 'speakeasy-sdk/php 0.1.3 2.210.3 0.1.0 kohortpay/kohortpay-php';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return KohortPay::SERVERS[$this->serverIndex];
	}
	
}