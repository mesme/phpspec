<?php

namespace CampusWonders\Bee;

class BeeCollection
{
    private $bees = [];
    private $dead = [];


    public function __construct(Array $bees)
    {
        $this->bees = $bees;
    }

    public function hit()
    {
        $index = $this->_generateRandom();

        if($this->bees[$index] instanceof Queen){
            return false;
        }

        if($this->bees[$index]->getPoints() <= 0){
            $this->dead[] = $index;
            $this->status = false;
            return false;
        }

        $this->bees[$index]->hit();
        return $this->bees[$index]->getPoints();
    }

    public function getBees()
    {
        return $this->bees;
    }

    private function _generateRandom()
    {
        $index = rand(0, (count($this->bees) - 1));
        if(in_array($index, $this->dead)){
            $this->_generateRandom();
        }
        return $index;
    }


}