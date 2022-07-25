<?php

$cars = array("ferrari", "audi", "lambo", "chrysler", "tesla", "corola", "civic", "bmw", "impala68", "mercedes");

sort($cars);

foreach($cars as $key => $value){
	switch($key) {
	case(0):  $extra = "Is the zeroth.";		break;
	case(1):  $extra = "Spelled \"BMW\".";		break;
	case(2):  $extra = "Unheard of.";			break;
	case(3):  $extra = "It has five letters.";	break;
	case(4):  $extra = "It has four wheels.";	break;
	case(5):  $extra = "Ferrari";				break;
	case(6):  $extra = "Made before the '69.";	break;
	case(7):  $extra = "Rich status symbol.";	break;
	case(8):  $extra = "Used by Adolf Hitler.";	break;
	case(9):  $extra = "Should be cheaper.";	break; }
	echo "cars[$key] = $value > $extra\n";
};



?>