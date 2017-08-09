<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 11:26
 */

namespace CampusWonders\Models;


abstract class AbstractItem
{
    public function calculatePrice($quantity, $price, $offer)
    {
        return (int) floor($quantity/$offer['quantity']) * $offer['price'] + ($quantity % $offer['quantity']) * $price;
    }
}