<?php
/**
 * Created by PhpStorm.
 * User: bigstudio03
 * Date: 09/08/2017
 * Time: 16:25
 */

namespace CampusWonders\Bee;


class BeeCollection
{
    private $bees = [];


    public function __construct(Array $bees)
    {
        $this->bees = $bees;
    }

    public function hit()
    {
        $index = rand(0, count($this->bees) - 1);

        if($this->bees[$index] instanceof Queen){
            return false;
        }
        $this->bees[$index]->hit();
        return $this->bees[$index]->getPoints();
    }



}