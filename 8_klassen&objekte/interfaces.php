<?php

class Notebook implements OS {
  public $cpu;
  public $ram;

  function osInfo($os) {
    return "Auf diesem Notebook läuft $os";
  }
}

class Auto implements OS {
  public $marke;
  public $ps;

  function osInfo($os) {
    return "Das Infotainmentsystem dieses Autos wird ist $os";
  }
}

//Das Interface stellt sicher, dass Klassen, die das Interface implementieren ober die Funktion osInfo() verfügen
interface OS {
  public function osInfo($os);
}

function Info(OS $obj) {
  //echo "<p>Alle verfügbaren Daten:</p>";
  return $obj->osInfo("unbekannt");
}

$notebook = new Notebook();
var_dump(Info($notebook));
//var_dump($notebook->osInfo("Windows 10"));

$audi = new Auto();
//var_dump($audi->osInfo("Android Auto"));
var_dump(Info($audi));

?>
