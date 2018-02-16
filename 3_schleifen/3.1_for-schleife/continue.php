<?php

//Ausgabe von Ganzzahlen, bei Erfüllung einer Bedingung werden eine bestimmte Zahlen übersprungen:
for ($i=1; $i<=100; $i++) {
  if ($i % 3 == 0 || stristr($i, "3")==="3") {
    continue;
  }
  echo $i . ", ";
}
?>
