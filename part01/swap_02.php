<?php

$a = 10; $b = 20;

echo "\$a is $a\n";
echo "\$b is $b\n";
echo "\n";

$a ^= $b ^= $a ^= $b;

echo "\$a is $a\n";
echo "\$b is $b\n";

?>
