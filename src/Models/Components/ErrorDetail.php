<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Components;


class ErrorDetail
{
    /**
     * Type of the error.
     * 
     * @var string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
    /**
     * Detailed error message.
     * 
     * @var string $message
     */
	#[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;
    
    /**
     * Specific error code.
     * 
     * @var string $code
     */
	#[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $code;
    
	public function __construct()
	{
		$this->type = "";
		$this->message = "";
		$this->code = "";
	}
}