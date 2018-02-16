<?php

//Methode
class User {
  private $name;
  private $passwort;

  public function __construct($name, $passwort) {
    $this->name = $name;
    $this->passwort = $passwort;
  }

  public function getInfo() {
    echo "<p>Benutzer: $this->name, Passwort: $this->passwort</p>";
  }

  public function checkPass($newPass) {
    if (strlen($newPass) < 8) {
    echo "<p>Neues Passwort zu kurz (mindestens 8 Zeichen).</p>";
    } else {
    $this->passwort = $newPass;
    echo "Neues Passwort gesetzt!";
    }
  }

  public function setPass($newPW) {
    $this->checkPass($newPW);
  }
}

$user1 = new User("Martin", 123);
$user1->getInfo();

//Passwort wird nicht gesetzt
$user1->setPass(1234);
$user1->getInfo();

//Passwort wird gesetzt
$user1->setPass(12345678);
$user1->getInfo();

?>
