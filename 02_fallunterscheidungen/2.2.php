<?php

$anschaffungsWert = 410;

//Vorsicht: Parameter für mktime(Stunden, Minuten, Sekunden, Monat, Tag, Jahr)
$anschaffungsDatum = mktime(0,0,0,7,22,2018);
$monat = intval(date("m", $anschaffungsDatum));

if ($anschaffungsWert <= 400) {
  echo "Sofort abschreiben";
} else {
  if ($monat <= 6) {
    echo "Halbjahres-AfA";
  } else {
    echo "Ganzjahres-AfA";
  }
}

?>
