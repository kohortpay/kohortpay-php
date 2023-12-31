<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace kohortpay\sdk\Models\Components;


class CreateLineItemDto
{
    /**
     * The name of the item.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The price of the item.
     * 
     * @var float $price
     */
	#[\JMS\Serializer\Annotation\SerializedName('price')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $price;
    
    /**
     * The quantity of the item.
     * 
     * @var float $quantity
     */
	#[\JMS\Serializer\Annotation\SerializedName('quantity')]
    #[\JMS\Serializer\Annotation\Type('float')]
    public float $quantity;
    
    /**
     * The URL of the item image.
     * 
     * @var ?string $imageUrl
     */
	#[\JMS\Serializer\Annotation\SerializedName('imageUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;
    
    /**
     * The description of the item.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * The type of the item.
     * 
     * @var string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $type;
    
	public function __construct()
	{
		$this->name = "";
		$this->price = 0;
		$this->quantity = 0;
		$this->imageUrl = null;
		$this->description = null;
		$this->type = "";
	}
}
