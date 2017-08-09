<?php
session_start();
require "vendor/autoload.php";
use CampusWonders\Bee\BeeCollection;
use CampusWonders\Bee\Queen;
use CampusWonders\Bee\Worker;
use CampusWonders\Bee\Drone;

if(!isset($_SESSION['bees'])){
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

    $_SESSION['bees'] = serialize($bees);
} else {
    $bees = unserialize($_SESSION['bees']);
}


if(isset($_GET['hit'])){
    echo "here";
    $hit = $bees->hit();
    if($hit !== false){
        echo $hit;
    } else {
        echo "Game over";
    }
    echo "\r\n";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 800px}

    /* Set gray background color and 100% height */
    .sidenav {
    background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
    background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
    .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">

    </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>

