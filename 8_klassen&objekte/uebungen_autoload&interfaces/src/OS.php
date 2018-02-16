<?php

//Das Interface stellt sicher, dass Klassen, die das Interface implementieren über die Funktion osInfo() verfügen
interface OS {
  public function osInfo($os);
}
