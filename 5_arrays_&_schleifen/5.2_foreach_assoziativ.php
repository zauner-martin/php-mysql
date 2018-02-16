<?php
$artikel = ["Hose" => 89, "Pulli" => 49, "Kappe" => 20, "Tennissocken" => 20];

echo "<h3>Artikelpreise in EUR</h3>";

foreach ($artikel as $key => $value) {
  echo "<p>$key: $value</p>";
}

echo "<h3>Artikelpreise in NOK</h3>";
foreach ($artikel as $key => $value) {
  echo "<p>". $key . ": ". round($value * 9) . "</p>";
}
?>
