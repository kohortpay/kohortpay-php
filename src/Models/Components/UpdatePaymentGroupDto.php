<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Components;


class UpdatePaymentGroupDto
{
    /**
     * Additional metadata for the payment group update.
     * 
     * @var \kohortpay\sdk\Models\Components\UpdatePaymentGroupDtoMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('kohortpay\sdk\Models\Components\UpdatePaymentGroupDtoMetadata')]
    public UpdatePaymentGroupDtoMetadata $metadata;
    
	public function __construct()
	{
		$this->metadata = new \kohortpay\sdk\Models\Components\UpdatePaymentGroupDtoMetadata();
	}
}