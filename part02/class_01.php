<?php

// faux input
class student {
	public $name  = "Guilherme";
	public $local = "Greater Natal";
	public $birth = 2002;
	public $grade = 5;
}

$student = new student();

// processing
foreach($student as $data){
	switch ($data) {
		case(1): echo "Great\n"; break;
		case(2): echo "Good\n";  break;
		case(3): echo "Mid\n";   break;
		case(4): echo "Bad\n";   break;
		case(5): echo "Awful\n"; break;
		default: echo "$data\n"; break;
	}
};




?>