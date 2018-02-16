<?php

session_start();

if (isset($_SESSION["visits"])) {
  $knownVisitor = true;
  echo "<p>Sie haben diese Seite während der bestehenden Session schon einmal besucht.</p>";
}
else {
  $knownVisitor = false;
  echo "<p>Dies ist Ihr erster Besuch während dieser Session.</p>";
  $_SESSION["visits"] = true;
}
?>
