<?php

session_start();

?>
<html lang="en">
  <head>
  <title>Daten löschen</title>
  </head>
  <body>
    <?php
      //Löscht die Elemente aus dem Session-Array
      session_unset();

      //löscht das Cookie, erst im 2. Schritt aktivieren
      //session_destroy();

    ?>
  </body>
</html>
