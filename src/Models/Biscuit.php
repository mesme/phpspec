<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:26
 */

namespace CampusWonders\Models;


class Biscuit extends AbstractItem implements ItemInterface
{
    private $price = 30;

    private $offer = [
        'quantity' => 2,
        'price' => 45
    ];

    public function getName()
    {
        return "Biscuit";
    }

    public function getPrice($quantity)
    {
        return $this->calculatePrice($quantity, $this->price, $this->offer);
    }
}