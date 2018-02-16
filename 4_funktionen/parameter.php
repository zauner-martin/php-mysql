<?php
  function berechneNRA ($VPNetto, $EP) {
    $NRA = ($VPNnetto - $EP) / $EP;
    echo "Der Nettorohaufschlag beträgt " . round($NRA, 2);
  }

  berechneNRA(50, 100);
?>
