<?php

function autoload($class) {
  if(file_exists("./src/$class.php")) {
    require "./src/$class.php";
  }
}

spl_autoload_register("autoload");

// phpinfo();

$pdo = new PDO("mysql:host=localhost;dbname=blog", "root", "");

$res = $pdo->query("SELECT * FROM `blog`.`posts`");

//var_dump($res);

//Hinweis auf doppelte Ausgabe (Key und Index)
foreach($res AS $row) {
  var_dump($row);

  //Zur Wiederholung Arrays: 
  echo $row["titel"];
};


?>
