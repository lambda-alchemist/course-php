<?php

// base class
class student {
	public $name = "blankName";
	public $grade = array(0, 0, 0, 0);
	function getGrades() { return ( array_sum($this->grade) / count($this->grade) ); }
}


// faux input
$me = new student();
$me->name  = "Guilherme";
$me->grade = array(7, 6, 8, 9);


// printing
$userName  = $me->name;
$userGrade = $me->getGrades();
echo "$userName has an average grade of $userGrade\n";


?>