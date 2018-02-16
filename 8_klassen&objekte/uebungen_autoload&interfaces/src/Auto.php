<?php

class Auto implements OS {
  public $marke;
  public $ps;

  public function osInfo($os) {
    return "Das Infotainmentsystem dieses Autos ist $os";
  }
}
