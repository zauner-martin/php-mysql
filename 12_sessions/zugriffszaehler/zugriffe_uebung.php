<?php

session_start();

if (isset($_SESSION["counter"])) {
  $_SESSION["counter"] += 1;
  echo "<p>Sie haben diese Seite während der bestehenden Session schon " . $_SESSION['counter'] . " Mal besucht.</p>";
}
else {
  $_SESSION["counter"] = 1;
  echo "<p>Dies ist Ihr erster Besuch während dieser Session.</p>";
}
?>
