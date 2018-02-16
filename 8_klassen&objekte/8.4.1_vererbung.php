<?php

class Rechner {
  public $cpu;
  public $ram;

  public function __construct($cpu, $ram) {
    $this->cpu = $cpu;
    $this->ram = $ram;
  }
}

//Notebook erbt alle Eigenschaften und Methoden von Rechner, diese lassen sich ergänzen und überschreiben
class Notebook extends Rechner {
  //Ergänzung um die Eigenschaft "display"
  public $display;

  //Verwenden der Methode "info()" der Elternklasse und Ergänzung, auch Überschreiben wäre möglich
  public function __construct($cpu, $ram, $display) {
    parent::__construct($cpu, $ram);
    $this->display = $display;
  }
}

$asus = new Notebook("2,5 Ghz", "8 GB", "15-Zoll");

var_dump($asus);
?>
