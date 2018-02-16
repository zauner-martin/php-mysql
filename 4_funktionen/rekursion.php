<?php
  //Funktionsaufruf mit 10, 9 und 8 - bei 7 wird 0 returniert
  function summe($x) {
    if ($x == 0) {
      return "Schluss damit!";
    }
    var_dump($x);
    return summe($x -1);
  }

echo summe(10);
?>
