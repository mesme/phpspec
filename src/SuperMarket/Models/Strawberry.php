<?php

namespace CampusWonders\SuperMarket\Models;

class Strawberry
{
    private $name = 'Strawberry';
    private $price = 50;
    private $offer = [
        'quantity' => 3,
        'price' => 130
    ];

    public function getName()
    {
        return $this->name;
    }

    public function getPrice($quantity)
    {
        return $this->price * $quantity;
    }

    public function getOfferDetails()
    {
        return $this->offer;
    }
}
