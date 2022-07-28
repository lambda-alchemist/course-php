<?php

$a =     $b = 56;
$c = 45; $d = 92;
$e = 89; $f = 78;

function equal($x, $y) {
	if( $x == $y ) { echo "The first number is equals\n"; } else
	if( $x > $y ) { echo "The first number is greater\n"; } else
	if( $x < $y ) { echo "The first number is lesser\n"; } else;
}

equal($a, $b);
equal($c, $d);
equal($e, $f);

?>