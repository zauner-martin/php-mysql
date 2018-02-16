<?php

if (isset($_COOKIE["visits"])) {
  $knownVisitor = true;
  echo "<p>Sie haben diese Seite schon einmal besucht.</p>";
}
else {
  $knownVisitor = false;
  echo "<p>Dies ist Ihr erster Besuch auf dieser Seite.</p>";
  setcookie("visits", true, time() + 60);
}
?>
