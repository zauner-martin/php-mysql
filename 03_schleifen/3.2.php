<?php

$i = 1;
$summe = 0;

//Verwendung der for-Schleife, wenn die Anzahl der Schleifendruchläufe bekannt ist
for ($i; $summe + $i <= 1000; $i++) {
  $summe += $i;
}

var_dump($summe);
?>
