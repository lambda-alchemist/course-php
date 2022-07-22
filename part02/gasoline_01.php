<?php

// faux input
$liters = 20;
$fuel = "Gasoline";
$price;
$off;

// processing
if ($liters >= 20 && $fuel == "Alcohol") { $off = 0.05; $price = 2.90; }
if ($liters <= 19 && $fuel == "Alcohol") { $off = 0.03; $price = 2.90; }
if ($liters >= 20 && $fuel == "Gasoline") { $off = 0.06; $price = 3.30; }
if ($liters <= 19 && $fuel == "Gasoline") { $off = 0.04; $price = 3.30; }

$total = round(( $liters * $price ) - ( $price * $off ), 2);

echo "$total\n";

?>