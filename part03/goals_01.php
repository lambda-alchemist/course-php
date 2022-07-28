<?php

$teamNames = array("Flamengo", "Fluminese");
$teamScore = array(3, 1);

if ( $teamScore[0] == $teamScore[1]) { echo"O jogo resultou em EMPATE"; } else
if ( $teamScore[0] > $teamScore[1]) { echo"O vencedor é " . $teamNames[0] . "com um total de " . $teamScore[0] . " gols\n"; } else
if ( $teamScore[0] < $teamScore[1]) { echo"O vencedor é " . $teamNames[1] . "com um total de " . $teamScore[0] . " gols\n"; } else;


?>