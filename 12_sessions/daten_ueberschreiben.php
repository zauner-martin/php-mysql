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
        $_SESSION["Skriptsprache"] = "PHP 8 Preview";
        echo "<p>Skriptsprache: " . $_SESSION["Skriptsprache"] . "</p>";
      }

    ?>

    <p><a href="daten_loeschen.php">Daten löschen</a></p>
  </body>
</html>
