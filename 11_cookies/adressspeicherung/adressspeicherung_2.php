<?php
$t = time() + 86400 * 365;
//setcookie("w_m", $_POST["w_m"], $t);
setcookie("vname", $_POST["vname"], $t);
setcookie("nname", $_POST["nname"], $t);

?>

<html>
  <head>
  </head>
  <body>
  <!-- Ergänzung um Frau/Herr, je nach Geschlecht -->
  <p>Danke für Ihre Bestellung!</p>
  </body>
</html>
