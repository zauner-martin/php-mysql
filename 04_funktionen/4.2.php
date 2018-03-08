<?php
function berechneAfa(...$params) {
  $numParams = count($params);
  $afa = $params[0] / $params[1];
  if ($numParams == 3) $afa /= 2;
  echo "Die Jahresabschreibung beträgt: " . $afa;
}

berechneAfa(800, 5, false);
?>
