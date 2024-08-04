<?php

namespace Mattsmithdev;


class Product
{
    private string $name;
    private float $price;

    public function __construct(string $name, int $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if(empty($name)){
            throw new \InvalidArgumentException('Product name cannot be empty');
        }

        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        if($price < 0){
            throw new \InvalidArgumentException("Price must be zero or a positive number");
        }

        if($price > 100000){
            throw new \Exception("Price must be less than 100000");
        }

        $this->price = $price;
    }

}