<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Operations;


class ExpireCheckoutSessionResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
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
     * API key is not Valid
     * 
     * @var ?\kohortpay\sdk\Models\Components\UnauthorizedException $unauthorizedException
     */
	
    public ?\kohortpay\sdk\Models\Components\UnauthorizedException $unauthorizedException = null;
    
    /**
     * Checkout session not found.
     * 
     * @var ?\kohortpay\sdk\Models\Components\BadRequestResponse $badRequestResponse
     */
	
    public ?\kohortpay\sdk\Models\Components\BadRequestResponse $badRequestResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->unauthorizedException = null;
		$this->badRequestResponse = null;
	}
}
