<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 10:25
 */

namespace CampusWonders\Models;


interface ItemInterface
{
    public function getName();
    public function getPrice($quantity);
}