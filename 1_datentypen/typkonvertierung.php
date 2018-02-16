<?php

  //Ohne Datentypenkonvertierung
  $student = "false";
  if ($student == true) {
    echo "Ermäßigung 10 %. <br>";
  } else {
    echo "Keine Ermäßigung. <br>";
  }

  //Mit Datentypenkonvertierung
  $student = "true";
  $studentKonv = (bool) $student;
  if ($studentKonv) {
    echo "Ermäßigung 10 %.";
  } else {
    echo "Keine Ermäßigung. <br>";
  }
?>
