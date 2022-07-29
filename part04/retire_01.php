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

$neto->setAge(50);
$neto->setExp(10);
$retireStatus = 0;
$worker = array(
	$neto->getAge(),
	$neto->getExp());

if ($worker[0] >= 65)
	{ $retireStatus = 1; }

if ($worker[1] >= 30)
	{ $retireStatus = 1; }

if ($worker[0] >= 60 && $worker[1] >= 25)
	{ $retireStatus = 1; }

if ($retireStatus)  { echo "The worker Neto is able to retire\n"; }
if (!$retireStatus) { echo "The worker Neto can't retire\n"; }

?>
