<?php

$totalHours = 40;
$hourlyRate = 15.00;
$salary = 0;

if($totalHours <= 40) {
	$salary =
		$totalHours * $hourlyRate; }
else
	
if($totalHours >= 40) {
$salary =
	($hourlyRate * 40) +
	(($totalHours - 40) * ($hourlyRate * 1.5));
}

echo "The final salary is USD\$$salary\n";

?>