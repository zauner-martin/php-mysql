<?php

  $name = "Martin";

  //Wäre eine Referenz auf die Variable übergeben worden (&$name), hätte sich der Wert der Variablen geändert
  function hallo($vorname) {
    $name = $vorname;
    echo "<p>Wert von \$name in der Funktion: $name</p>";
   }

  hallo("Tom");
  echo "<p>Wert von \$name ausserhalb der Funktion: $name</p>";

?>
