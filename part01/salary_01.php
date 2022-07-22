<?php

// faux input
$salary = 5000.00;

// adjust
$adjust = 5.4;

// processing
$result =
	($salary / 100) *
	(($adjust + 100.0) / 100.0);

// printing
echo "Your OLD salary: $salary\n";
echo "The ADJUST rate: $adjust\n";
echo "Your NEW salary: $result\n";
