<?php

class Notebook {
  public $cpu;
  public $ram;
}

$asus = new Notebook();
$asus->cpu = "2.8 Ghz";
$asus->ram = "4 GB";

var_dump($asus);

$lenovo = new Notebook();
$lenovo->cpu = "3 Ghz";
$lenovo->ram = "8 GB";

var_dump($lenovo);

?>
