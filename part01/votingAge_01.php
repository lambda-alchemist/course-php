<?php

// faux input
$currYear = 2016;
$userYear = 2002;
$userAge = $currYear - $userYear;

// processing
if ($userAge>=18)
	{ echo "At $userAge years of age, the user needs to vote\n"; }

if ($userAge<=15)
	{ echo "At $userAge years of age, the user does not vote\n"; }

if ($userAge>=16 && $userAge<=17)
	{ echo "At $userAge years of age, the user can vote if they choose to\n"; }

?> 