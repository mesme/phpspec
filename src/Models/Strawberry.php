<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:26
 */

namespace CampusWonders\Models;


class Strawberry extends AbstractItem implements ItemInterface
{
    private $price = 50;

    private $offer = [
        'quantity' => 3,
        'price' => 130
    ];

    public function getName()
    {
        return "Strawberry";
    }

    public function getPrice($quantity)
    {
        return $this->calculatePrice($quantity, $this->price, $this->offer);
    }


}