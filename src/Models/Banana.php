<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:26
 */

namespace CampusWonders\Models;


class Banana extends AbstractItem implements ItemInterface
{
    private $price = 15;

    private $offer = [
        'quantity' => 1,
        'price' => 15
    ];

    public function getName()
    {
        return "Banana";
    }

    public function getPrice($quantity)
    {
        return $this->calculatePrice($quantity, $this->price, $this->offer);
    }
}