<?php

$anschaffungsWert = 410;
$anschaffungsDatum = mktime(0,0,0,7,22,2018);
$monat = intval(date("m", $anschaffungsDatum));
$tag = intval(date("d", $anschaffungsDatum));

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
