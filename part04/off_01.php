<?php

$items = 30;
$price = 2.50;
$off = 1.00;
$total = $items * $price;

if($items >= 1  && $items <= 5 ) { $off = 0.02; };
if($items >= 6  && $items <= 10) { $off = 0.03; };
if($items >= 11 && $items <= 99) { $off = 0.05; };

$subtotal = 
	$total -
	($total * $off);

echo "The total comes to USD\$$subtotal\n"

?>