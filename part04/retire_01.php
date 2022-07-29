<?php

class someWorker {
	private $age;
	private $exp;

	public function setAge($x) { $this->age = $x; }
	public function setExp($y) { $this->exp = $y; }

	public function getAge() { return $this->age; }
	public function getExp() { return $this->exp; }
}

$neto = new someWorker;

$neto->setAge(60);
$neto->setExp(30);

$worker = array(
	$neto->getAge(),
	$neto->getExp()
);

if ($worker[0] >= 65)
	{ $retireStatus = 1; }
	
if ($worker[1] >= 30)
	{ $retireStatus = 1; }

if ($worker[0] >= 60 && $worker[1] >= 25)
	{ $retireStatus = 1; }

?>