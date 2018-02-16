<?php
$t = time() + 86400 * 365;
//Vorsicht: hier werden die Cookies am Client erst gesetzt, erst beim nächsten Aufruf des Servers werden sie übertragen!
setcookie("anrede", $_POST["anrede"], $t);
setcookie("vname", $_POST["vname"], $t);
setcookie("nname", $_POST["nname"], $t);

?>

<html>
  <head>
  </head>
  <body>
    <p>Danke für Ihre Bestellung,
    <?php
    /* Vorsicht: die Daten aus den Cookies werden erst beim nächsten Auftruf des Servers übertragen!
    if ($_COOKIE["anrede"] == "Frau") {
      echo "Frau ";
    } else {
      echo "Herr ";
    }
    echo $_COOKIE['nname'];
    */
    if ($_POST["anrede"] == "Frau") {
      echo "Frau ";
    } else {
      echo "Herr ";
    }
    echo $_POST['nname'];
    ?>
    !</p>
  </body>
</html>
