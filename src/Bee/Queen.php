<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 16:02
 */

namespace CampusWonders\Bee;


class Queen extends AbstractBee implements BeeInterface
{
    public function getName(){
        return 'Queen';
    }
}