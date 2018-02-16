<?php
  /*
  $name = "Martin";

  function hallo() {
    echo "Hallo $name";
  }

  hallo();
  */

  //Geänderter Code
  $name = "Martin";

  //Wäre eine Referenz auf die Variable übergeben worden (&$name), hätte sich der Wert der Variablen geändert
  function hallo($name) {
    echo "<h1>Ausgabe in der Funktion: $name</h1>";
    $name = "Tom";
    echo "<h1>Geändert in der Funktion: $name</h1>";
   }

  hallo($name);
  echo "<h1>Ausserhalb der Funktion: $name</h1>";

?>
