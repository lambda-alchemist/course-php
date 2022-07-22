<?php

// faux input
$factoryCost = 20000;
$distCost	 = $factoryCost * 0.28;
$taxCost	 = $factoryCost * 0.45;

$finalCost = $factoryCost + $distCost + $taxCost;

echo "The final cost of the vehicle is USD\$$finalCost\n";

?>