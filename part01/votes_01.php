<?php

// faux input
$votesTotal = 15638;
$votesBlank = 296;
$votesNull  = 59;
$votesValid = $votesTotal - ($votesBlank + $votesNull);

// processing
$pcVotesValid = round(100 * ($votesValid / $votesTotal), 2);
$pcVotesBlank = round(100 * ($votesBlank / $votesTotal), 2);
$pcVotesNull  = round(100 * ($votesNull  / $votesTotal), 2);

// printing
echo "There are $pcVotesValid% of valid votes\n";
echo "There are $pcVotesBlank% of valid votes\n";
echo "There are $pcVotesNull% of valid votes\n";

?>
