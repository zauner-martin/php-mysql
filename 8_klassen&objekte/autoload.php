<?php

function autoload($className) {
  var_dump($className);
  //mittels if wird die Problematik abgefangen, dass eine Klasse nicht existiert
  if (file_exists("./src/{$className}.php")) {
  require "./src/{$className}.php";
  }
}

spl_autoload_register("autoload");

$asus = new Notebook("2,8 Ghz", "16 GB", "13,3-Zoll");
var_dump($asus);

?>
