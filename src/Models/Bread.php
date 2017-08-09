<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:26
 */

namespace CampusWonders\Models;


class Bread extends AbstractItem implements ItemInterface
{
    private $price = 20;

    private $offer = [
        'quantity' => 1,
        'price' => 20
    ];

    public function getName()
    {
        return "Bread";
    }

    public function getPrice($quantity)
    {
        return $this->calculatePrice($quantity, $this->price, $this->offer);
    }
}