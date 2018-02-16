<?php

session_start();

?>
<html lang="en">
  <head>
  <title>Daten aus dem Session-Array auslesen</title>
  </head>
  <body>
    <?php

      if (isset($_SESSION["Skriptsprache"])) {
        echo "<p>Skriptsprache: " . $_SESSION["Skriptsprache"] . "</p>";
      }

    ?>

    <p><a href="daten_ueberschreiben.php">Daten ueberschreiben</a></p>
  </body>
</html>
