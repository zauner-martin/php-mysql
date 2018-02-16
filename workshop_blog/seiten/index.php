<?php include("./../database.php"); ?>
<?php include("./elements/header.php"); ?>

<h1>Die Startseite</h1>
<p class="lead">Das hier ist der Text der Startseite.</p>
<?php $res = fetch_posts(); ?>
<ul>
  <?php foreach($res AS $row): ?>
  <li>
    <a href="post.php?id=<?php echo $row["id"];?>">
      <?php echo $row["titel"]; ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>

<?php include("./elements/footer.php"); ?>
