<?php

$pdo = new PDO("mysql:host=localhost;dbbase=blog", "root", "");

function get_posts() {
  global $pdo;
  return $pdo->query("SELECT * FROM `blog`.`posts`");
}
