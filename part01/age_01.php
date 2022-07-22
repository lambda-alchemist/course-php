<?php

// registers
$a = 0; // years
$b = 0; // months
$c = 0; // days

// faux input
$a = 17;
$b = 7;
$c = 26;

// actual processing
$final =
 (	$a * 365 +
	$b * 30  +
	$c * 1    ); 

// printing
echo " You are $final days old.\n";
?>