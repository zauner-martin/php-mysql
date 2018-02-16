<?php

session_start();

?>
<html lang="en">
  <head>
  <title>Daten ins Session-Array schreiben</title>
  </head>
  <body>
    <?php

      $_SESSION["Skriptsprache"] = "PHP 7";

      if (isset($_SESSION["Skriptsprache"])) {
        echo "Sessionvariablen wurden gesetzt";
      }

    ?>

    <p><a href="daten_lesen.php">Daten auslesen ...</a></p>
  </body>
</html>
