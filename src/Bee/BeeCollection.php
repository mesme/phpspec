<?php

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