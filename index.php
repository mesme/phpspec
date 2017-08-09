<?php

require "vendor/autoload.php";

use CampusWonders\Models\Strawberry;
use CampusWonders\Models\Biscuit;
use CampusWonders\Models\Bread;
use CampusWonders\Models\Banana;
use CampusWonders\Models\Checkout;

$checkout = new Checkout();

/*
 * row 1
 */
$checkout->scan(new Strawberry());
$checkout->scan(new Biscuit());
$checkout->scan(new Bread());
$checkout->scan(new Banana());
echo $checkout->checkout();
echo "\r\n";

/*
 * row 2
 */
$checkout = new Checkout();
$checkout->scan(new Strawberry());
$checkout->scan(new Strawberry());
$checkout->scan(new Biscuit());
$checkout->scan(new Bread());
$checkout->scan(new Bread());
$checkout->scan(new Bread());
$checkout->scan(new Banana());
$checkout->scan(new Banana());
$checkout->scan(new Banana());
$checkout->scan(new Banana());
echo $checkout->checkout();
echo "\r\n";
/*
 * row 3
 */
$checkout = new Checkout();
$checkout->scan(new Strawberry());
$checkout->scan(new Strawberry());
$checkout->scan(new Strawberry());
$checkout->scan(new Biscuit());
$checkout->scan(new Biscuit());
$checkout->scan(new Bread());
$checkout->scan(new Bread());
$checkout->scan(new Banana());
$checkout->scan(new Banana());
echo $checkout->checkout();
echo "\r\n";
/*
 * row 4
 */

echo "\r\n";

