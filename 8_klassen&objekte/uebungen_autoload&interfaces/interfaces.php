<?php

function autoload($class) {
  if(file_exists("./src/$class.php"))
    require "./src/$class.php";
}

spl_autoload_register("autoload");

function info(OS $obj) {
  return $obj->osInfo("Android");
}

$notebook = new Notebook();
var_dump(info($notebook));
//var_dump($notebook->osInfo("Windows 10"));

$audi = new Auto();
var_dump(info($audi));
//var_dump($audi->osInfo("Android Auto"));

?>
