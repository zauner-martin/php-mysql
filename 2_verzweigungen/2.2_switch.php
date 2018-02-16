<?php

$ccmodul = "";

switch ($ccmodul) {
  case "by":
    echo "Namensnennung erforderlich";
    break;
  case "nc":
    echo "Nur nichtkommerzielle Verwendung";
    break;
  case "nd":
    echo "Keine Veränderung erlaubt";
    break;
  case "sa":
    echo "Weitergabe unter gleicher Lizenz";
    break;
  default:
    echo "Kein gültiges Rechtsmodul!";
    break;
}

?>
