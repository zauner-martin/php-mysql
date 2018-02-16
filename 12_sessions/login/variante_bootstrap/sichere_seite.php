<?php
//Session wiederaufnehmen, falls der User vorher ein logout durchgeführt hat (auf jeder neuen Site notwendig, da session.auto_start standardmäßig false)
session_start();

if (isset($_POST["name"])){
  if ($_POST["name"] == "User" && $_POST["password"] == "Test") {
    $_SESSION["name"] = $_POST["name"];
  }
}

if (!isset($_SESSION["name"])) {
  exit("<p>Falscher Benutzer und oder Kennwort!</p><p><a href='login.php'>Zum Login</a></p>");
}

//Einbinden der Navigation
require("./elements/navigation.php");
?>

<h1>Hallo <?php echo $_SESSION["name"];?>!</h1>
<p>Hier stehen die Inhalte der ersten geschützten Seite...</p>
<p><a href="login.php">Logout</a></p>

<?php
//Einbinden Footer
require("./elements/footer.php");
?>
