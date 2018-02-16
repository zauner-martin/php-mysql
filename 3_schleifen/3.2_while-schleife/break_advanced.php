<?php
//Geleiches Problem wie 5.3.2 mit for-Schleife
$i = rand(1, 10);
$summe = 0;

for ($i; $summe + $i <= 1000; $i = rand(1,10)) {
  $summe += $i;
  echo $summe . ", ";
}
?>
