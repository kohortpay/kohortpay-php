<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Components;


class ValidatePaymentGroupDto
{
    /**
     * The email address of the customer.
     * 
     * @var string $customerEmail
     */
	#[\JMS\Serializer\Annotation\SerializedName('customerEmail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerEmail;
    
	public function __construct()
	{
		$this->customerEmail = "";
	}
}
