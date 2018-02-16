<html>
  <head>
  </head>
  <body>
    <form action="adressspeicherung_2.php" method="post">
      <h3>Bestellforumular</h3>
      <?php
      echo "<p><input type='text' name='vname' value='";
      if (isset($_COOKIE["vname"])) {
        echo $_COOKIE["vname"];
      }
      echo "'>Vorname</input></p>";

      echo "<p><input type='text' name='nname' value='";
      if (isset($_COOKIE["nname"])) {
        echo $_COOKIE["nname"];
      }
      echo "'>Nachname</input></p>";
      ?>
      <p><input type="submit" value="absenden"></p>
    </form>
  </body>
</html>
