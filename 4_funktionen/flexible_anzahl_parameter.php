<?php
function berechneAfa(...$params) {
  $numParams = count($params);
  $afa = 0;
    if ($numParams == 2) {
      $afa = $params[0]/$params[1];
    } else {
      $afa = $params[0] / $params[1] / 2;
    }
  echo "Die Jahresabschreibung beträgt: " . $afa;
}

berechneAfa(800, 5, false);
?>
