<?php

class Notebook {
  public function starten() {
    echo "<p>Notebook gestartet</p>";
  }
}

$asus = new Notebook();
$asus->starten();

$lenovo = new Notebook();
$lenovo->starten();

?>
