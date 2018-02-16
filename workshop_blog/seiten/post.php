<?php include("./../database.php"); ?>
<?php include("./elements/header.php"); ?>

<h1>Die Posts</h1>

<?php
$id = $_GET["id"];
$post = fetch_post($id);
var_dump($post);
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <?php echo $post["titel"]; ?>
  </div>
  <div class="panel-body">
    <!-- Als Denkaufgabe für die Schüler string-Erstetzung: -->
    <?php echo nl2br($post["inhalt"]); ?>
  </div>
</div>

<?php include("./elements/footer.php"); ?>
