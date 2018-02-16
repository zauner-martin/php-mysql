<?php
$reservierungen = [["22.02.2018", "28.02.2018"],["14.01.2018", "18.01.2018"],["20.01.2018", "28.01.2018"]];

$anreise = strtotime($_POST["anreise"]);
$abreise = strtotime($_POST["abreise"]);
$kollisionen = false;

foreach ($reservierungen as $von_bis) {
  if ($anreise < strtotime($von_bis[1]) && $abreise > strtotime($von_bis[0])) {
    $kollisionen = true;
  }
}
if ($kollisionen == true) {
  echo "Im gewählten Zeitraum ist das Appartement leider belegt.";
} else {
  echo "Appartment reserviert";
}
?>
