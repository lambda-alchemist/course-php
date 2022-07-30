<?php

$i = $sum = 0;

for ( $i = 1 ; $i <= 1000 ; $i++ ){
	if( $i % 7 ){ } else {
		$sum = $sum + $i;
	}
}

echo "$sum\n";

?>
