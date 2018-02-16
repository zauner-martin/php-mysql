<?php

$i = 1;
$summe = 0;

//Verwendung der for-Schleife, wenn die Anzahl der Schleifendruchläufe bekannt ist
for ($i; $i <=100; $i+=1) {
  $summe += $i;
}

var_dump($summe);
?>
