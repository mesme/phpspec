<?php

require "vendor/autoload.php";
use CampusWonders\Bee\BeeCollection;
use CampusWonders\Bee\Queen;
use CampusWonders\Bee\Worker;
use CampusWonders\Bee\Drone;

$bees = new BeeCollection([
    new Queen(100, 8),
    new Worker(75, 10),
    new Worker(75, 10),
    new Worker(75, 10),
    new Worker(75, 10),
    new Worker(75, 10),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),
    new Drone(50,12),

]);

$hit = $bees->hit();

if($hit !== false){
    echo $hit;
} else {
    echo "Game over";
}
echo "\r\n";