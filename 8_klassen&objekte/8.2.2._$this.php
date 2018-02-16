<?php

class Notebook {
  public $marke;

  function info() {
    echo "<p>$this->marke gestartet</p>";
  }
}

$notebook1 = new Notebook();
$notebook1->marke = "Asus";
$notebook1->info();

$notebook2 = new Notebook();
$notebook2->marke = "Lenovo";
$notebook2->info();

?>
