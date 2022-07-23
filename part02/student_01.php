<?php

// base class
class student {
	public $name = "blankName";
	public $grade = array(0, 0, 0, 0);
	function avrg() { return(array_sum($this->grade) / count($this->grade)) ;}


	function qual() {
		echo "Student: " . $this->name   . "\n";
		echo "Average: " . $this->avrg() . "\n";

		foreach($this->grade as $key => $val){
			if ($val>=7)
				{$out = "Excellent";}
			else
				{$out = "Bad";}
			$key++; // off by one :P
			echo "On bimester $key, the student was $out\n";
		}
	}
};

// faux input
$me = new student();
$me->name = "Guilherme";
$me->grade = array(10, 8, 5, 9);

$me->qual();
?>
