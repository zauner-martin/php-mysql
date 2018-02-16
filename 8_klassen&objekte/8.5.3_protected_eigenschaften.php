<?php

class Rechner {
  //Est mit private, dann mit protected zeigen
  private $cpu;
  private $ram;

  public function __construct($cpu, $ram) {
    $this->cpu = $cpu;
    $this->ram = $ram;
  }
}


//Notebook erbt alle Eigenschaften und Methoden von Rechner, diese lassen sich ergänzen und überschreiben
class Notebook extends Rechner {
  //Ergänzung um die Eigenschaft "display"
  private $display;

  public function __construct($cpu, $ram, $display) {
    parent::__construct($cpu, $ram);
    $this->display = $display;
  }

//Problematik, dass von außen nicht auf die Eigenschaft "ram" zugriffen werden kann!
  public function aufruesten($ramNeu) {
    $this->ram = $ramNeu;
  }
}

$asus = new Notebook("2,5 Ghz", "8 GB", "15-Zoll");

$asus->aufruesten("16 GB");
var_dump($asus);

?>
