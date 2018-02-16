<?php

if (isset($_COOKIE["counter"])) {
  //Vorsicht: der Inhalt eines Cookies kann nicht wie bei einer Session über das Array hochgezählt werden
  //Geht nicht: $_COOKIE["counter"] += 1;
  $cookiecounter = $_COOKIE["counter"] + 1;
  setcookie("counter", $cookiecounter);
  echo "<p>Sie haben diese Seite innerhalb der letzten 24 Stunden schon " . $cookiecounter . " Mal besucht.</p>";
}
else {
  setcookie("counter", "1", time() + 86400);
  echo "<p>Dies ist Ihr erster Besuch auf dieser Seite.</p>";
}
?>
