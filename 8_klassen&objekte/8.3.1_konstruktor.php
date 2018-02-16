<?php

//Methode
class Notebook {
  public $marke;
  public $bs;

  function info($marke, $bs) {
    echo "<p>Auf meinem $marke läuft $bs</p>";
  }
}

$notebook1 = new Notebook();
$notebook1->info("Asus", "Windows 10");

//Eigenschaften sind nicht gesetzt (NULL), $marke und $bs sind nur innerhalb der Funktion info() verfügbar
var_dump($notebook1);

//Konstruktor
class Smartphone {
  public $marke;
  public $bs;
  function __construct($marke, $bs) {
    $this->marke = $marke;
    $this->bs = $bs;
    echo "<p>Auf meinem $this->marke läuft $this->bs</p>";
  }
}

$smartphone1 = new Smartphone("iPhone", "iOS 10");
var_dump($smartphone1);

?>
