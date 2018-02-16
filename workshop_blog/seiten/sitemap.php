<?php

session_start();
//var_dump($_COOKIE);

session_regenerate_id(true);

var_dump($_COOKIE["PHPSESSID"]);

var_dump($_SESSION);
//var_dump(session_save_path());

//$_SESSION["name"] = "Ein Name für die Session";


?>
