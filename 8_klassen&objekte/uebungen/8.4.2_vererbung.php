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

  public function update($ausstattung) {
    $this->ausstattung = $this->ausstattung . ", $ausstattung";
  }
}

class Appartment extends Unterkunft {
  public $anzahlSchlafzimmer;

  public function __construct($vermieter, $ausstattung, $hausregeln, $anzahlSchlafzimmer) {
    parent::__construct($vermieter, $ausstattung, $hausregeln);
    $this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
  }
}

$u1 = new Unterkunft("Martin Zauner", "Standard", "Bettruhe um 22:00 Uhr");
var_dump($u1);

$aprt1 = new Appartment("Donald T.", "", "Don´t use my twitter account", 28);
var_dump($aprt1);
$aprt1->update("nuclear button");

?>
