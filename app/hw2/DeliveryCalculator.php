<?php

namespace App\hw2;

use Exception;

class DeliveryCalculator
{
    private float $weight;
    private float $length;
    private float $width;
    private float $height;
    private float $sellerPrice;
    private float $finalPrice;

    /**
     * @throws Exception
     */
    public function __construct(float $weight, float $length, float $width, float $height, float $sellerPrice)
    {
        $this->setWeight($weight);
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setSellerPrice($sellerPrice);
    }

    /**
     * @throws Exception
     */
    public function setWeight(float $weight): void
    {
        if ($weight <= 0) {
            throw new Exception('Invalid weight');
        }
        $this->weight = $weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @throws Exception
     */
    public function setLength(float $length): void
    {
        if ($length <= 0) {
            throw new Exception('Invalid Length');
        }
        $this->length = $length;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @throws Exception
     */
    public function setWidth(float $width): void
    {
        if ($width <= 0) {
            throw new Exception('Invalid Width');
        }
        $this->width = $width;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @throws Exception
     */
    public function setHeight(float $height): void
    {
        if ($height <= 0) {
            throw new Exception('Invalid Height');
        }
        $this->height = $height;
    }


    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @throws Exception
     */
    public function setSellerPrice(float $sellerPrice): void
    {
        if ($sellerPrice <= 0) {
            throw new Exception('Invalid Price');
        }
        $this->sellerPrice = $sellerPrice;
    }

    public function getSellerPrice(): float
    {
        return $this->sellerPrice;
    }

    public function calculateDeliveryPrice()
    {
        $weightPrice = $this->weight * 50;
        $volumeWeightPrice = ($this->length * $this->width * $this->height);
        $this->finalPrice = max($weightPrice, $volumeWeightPrice, $this->sellerPrice);

        switch (true) {
            case $this->finalPrice == $weightPrice:
                return 'Weight';
            case $this->finalPrice == $volumeWeightPrice:
                return 'Volume Weight';
            default:
                return 'Seller Price';
        }
    }

    public function calculate(): string
    {
        return $this->calculateDeliveryPrice();
    }
}
