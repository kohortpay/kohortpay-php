<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Components;


class UpdateCustomerDto
{
	#[\JMS\Serializer\Annotation\SerializedName('deletedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $deletedAt = null;
    
	public function __construct()
	{
		$this->deletedAt = null;
	}
}