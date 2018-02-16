<?php

class Notebook extends Rechner {
  public $display;
  public function __construct($cpu, $ram, $display) {
    $this->cpu = $cpu;
    $this->ram = $ram;
    $this->display = $display;
  }
}
