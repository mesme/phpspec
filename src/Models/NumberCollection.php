<?php

namespace CampusWonders\Models;

class NumberCollection
{
    private $collection = [];

    public function add($argument1)
    {
        $this->collection[] = $argument1;
    }

    public function count()
    {
        return count($this->collection);
    }

}
