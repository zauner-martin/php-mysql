<?php

$nra = 3;
function berechne_nra($vp_netto, $ep) {
  $nra = ($vp_netto - $ep) / $ep * 100 . " %";
  echo $nra;
}

berechne_nra(100, 50);
?>
