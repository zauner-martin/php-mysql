<?php

include("./src/Forum/Post.php");
include("./src/FAQ/PostInterface.php");
include("./src/FAQ/Post.php");

// ohne Angabe des namespace kann die Klasse nicht gefunden werden
// $post1 = new Post("Mein erster Beitrag");
// var_dump($post1);

$post2 = new FAQ\Post("Mein erster Beitrag");
var_dump($post2);

?>
