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
        if($quantity === 1){
            return $price;
        }

        if(empty($offer)){
            return $price * $quantity;
        }

        if($quantity < $offer['quantity']){
            return $price * $quantity;
        }

        if($quantity == $offer['quantity']){
            return $offer['price'];
        }

        if($quantity > $offer['quantity']){
            return $offer['price'] + $this->calculatePrice($quantity - $offer['quantity'], $price, $offer);
        }
    }
}