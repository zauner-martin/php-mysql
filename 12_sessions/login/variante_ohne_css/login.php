<?php
//Session wiederaufnehmen, falls der User vorher ein logout durchgeführt hat (auf jeder neuen Site notwendig, da session.auto_start standardmäßig false)
session_start();

//Session löschen
session_destroy();

//zur Sicherheit Session-Array neu initialisieren
$_SESSION = array();
?>

<html lang="en">
  <head>
  <title>Sicheres Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <form method="post" action="sichere_seite1.php">
      <p><input type="text" name="name"></input></p>
      <p><input type="password" name="password"></input></p>
      <p><input type="submit" value="Login"></input></p>
    </form>
  </body>
</html>
