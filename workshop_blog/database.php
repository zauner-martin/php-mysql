<?php

//Erst root, dann bloguser herzeigen, Vorsicht bei Sonderzeichen im Kennwort
$pdo = new PDO("mysql:host=localhost;dbname=blog", "blog_user", "hallo");

function fetch_posts() {
  global $pdo;
  return $pdo->query("SELECT * FROM `blog`.`posts`");
}

function fetch_post($id) {
  global $pdo;

  //Sichere Lösung:
  $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE `id`=?");
  $stmt->execute([$id]);
  return $stmt->fetch();
  /*
  Unsichere Lösung aufgrund SQL-Injection: z. B. '; INSERT INTO `posts` (`titel`, `inhalt`) VALUES ('Ein Angriff', 'Text des Angriffs');

  $query = "SELECT * FROM `blog`.`posts` WHERE `titel`='$titel'";
  //var_dump($query);
  $q = $pdo->query($query);
  //var_dump($q);
  return $q->fetch();
  */
}

?>
