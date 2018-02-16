<?php

class Unterkunft {
  public $vermieter;
  public $ausstattung;
  public $hausregeln;

  public function __construct($vermieter, $ausstattung, $hausregeln) {
    $this->vermieter = $vermieter;
    $this->ausstattung = $ausstattung;
    $this->hausregeln = $hausregeln;
  }

  public function updateAusstattung($ausstattung) {
    $this->ausstattung = $this->ausstattung . ", $ausstattung";
  }
}

$u1 = new Unterkunft("Martin Zauner", "TV, Dusche", "keine");
print_r($u1);

$u1->updateAusstattung("Wifi");
print_r($u1);

?>
