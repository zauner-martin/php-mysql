<?php
$produkte = [
  "Haushaltselektronik" => [
    "Staubsauer",
    "Waschmaschine",
    "Geschirrspüler"
  ],
  "Unterhaltungselektronik" => [
    "Fernseher",
    "Kopfhoerer",
    "Spielkonsole"
  ]
];

var_dump($produkte);

echo "<ul>";
foreach ($produkte as $key => $value) {
  echo "<li>$key</li><ul>";
  foreach ($value as $item) {
    echo "<li>$item</li>";
  }
  echo "</ul>";
}
echo "</ul>";
?>
