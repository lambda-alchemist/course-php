<?php

$a = 10;
$b = 20;

echo "\$a is $a\n";
echo "\$b is $b\n\n";

$c = $a;
$a = $b;
$b = $c;

echo "\$a is $a\n";
echo "\$b is $b\n\n";

?>
