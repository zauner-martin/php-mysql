<?php

include("posts.php");
$res = get_posts();

foreach ($res as $post) {
  echo "<h1>{$post['titel']}";
  echo "<h2>{$post['inhalt']}";
}

?>
