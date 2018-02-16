<?php

class Rechner {
  //Est mit private, dann mit protected zeigen
  public $cpu;
  public $ram;

  public function __construct($cpu, $ram) {
    $this->cpu = $cpu;
    $this->ram = $ram;
  }
}
