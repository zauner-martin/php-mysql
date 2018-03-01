<?php

$i = rand(8,10);
$summe = 0;

while ($summe + $i <= 250) {
    $summe += $i;
    $i = rand(8,10);
}
echo $summe;
?>
