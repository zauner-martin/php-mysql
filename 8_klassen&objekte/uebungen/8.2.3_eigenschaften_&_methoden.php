<?php

class Arbeitnehmer {
  public $anrede;
  public $vorname;
  public $nachname;
  public $jahreImU;

  public function jahreImU($et, $em, $ej) {
    $heute = getdate();
    $jetztJahr = $heute["year"];
    $jetztMonat = $heute["mon"];
    $jetztTag = $heute["mday"];

    if($jetztMonat < $em || $jetztMonat == $em && $jetztTag < $et) {
      $this->jahreImU = $jetztJahr - $ej -1;
    } else {
      $this->jahreImU = $jetztJahr - $ej;
    }
    echo "$this->anrede $this->vorname $this->nachname arbeitet seit $this->jahreImU Jahren bei uns.";
  }
}

$ma1 = new Arbeitnehmer();
$ma1->anrede = "Hr.";
$ma1->vorname = "Yevgeniy";
$ma1->nachname = "Nourish";
$ma1->jahreImU(3,2,1980);

?>
