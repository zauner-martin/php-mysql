<?php

/*Zufallszahlen bilden und die Summe der Zufallszahlen ausgeben, solange die Summe nicht größer als 1000 ist:
Grundsätzliche Verwendung der while-Schleife, wenn die Anzahl der Schleifendruchläufe nicht bekannt ist - z. B. bei Datenbanken*/
$i = rand(1, 10);
$summe = 0;

while ($summe + $i <= 1000) {
  $summe += $i;
  echo $summe . ", ";
}
?>
