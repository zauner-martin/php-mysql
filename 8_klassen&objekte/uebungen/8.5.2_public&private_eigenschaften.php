<?php

class Artikel {
  private $id;
  private $name;
  private $preis;

  public function __construct($id, $name, $preis) {
    $this->id = $id;
    $this->name = $name;
    $this->preis = $preis;
  }

  public function indexAnpassung($index) {
    if ($index > 1) {
      $this->preis *= $index;
    }
  }
}

$artikel1 = new Artikel(1, "Testartikel", 200);

$artikel1->indexAnpassung(1.05);
var_dump($artikel1);
?>
