<?php

// items in bagging area
$apples = 12;
$price = 0;
$total = 0;

( $apples >= 12 ? $price = 1.00 : $price = 1.30 );

$total = $apples * $price;

echo "The total  comes to USD\$$total\n";

?>