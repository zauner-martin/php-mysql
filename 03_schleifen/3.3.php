<?php
//Ausgabe von Ganzzahlen, bei Erfüllung einer Bedingung wird die Schleife beendet:
$produkte = [1 => "Auto", 2 => "Fahrrad", 3 =>"Stoascheißer Koarl", 4 => "Kochlöffel"];
$anzahlProdukte = count($produkte);

for ($i = 1; $i < $anzahlProdukte; $i++) {
  if ($produkte[$i] == "Stoascheißer Koarl") {
    break;
  }
  echo "<p>Produkt " . $i . ": $produkte[$i]</p>";
}
?>
