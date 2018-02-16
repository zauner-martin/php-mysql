<?php

//Methode
class Notebook {
  private $os;

  function infoOS() {
    echo "<p>Auf diesem Notebook läuft $this->os</p>";
  }

  function wechsleOS($os) {
    $this->os = $os;
  }
}

$notebook1 = new Notebook();

//Zufriff von "außen" auf eine private Eigenschaft funktioniert nicht - AUSKOMMENTIEREN!
//$notebook1->bs = "Ubuntu_16.04";

//Zufgriff über die Methode funktioneirt zwar, die Eigenschaft ist jedoch nicht gesetzt
$notebook1->infoOS();
$notebook1->wechsleOS("Ubuntu_16.04");
$notebook1->infoOS();
?>
