<?php

class Notebook implements OS {
  public $cpu;
  public $ram;

  public function osInfo($os) {
    return "Auf diesem Notebook läuft $os";
  }
}
