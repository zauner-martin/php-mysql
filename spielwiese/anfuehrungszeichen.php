<?php
/*
echo "McDonalds'-Esser: \"Ich liebe es!\"<br>";

$version = "PHP 7";
echo "Die Variable \$version hat den Wert $version.<br>";

echo "Die Variable \$version hat den Wert " . $version . ".<br>";

$Zahl1 = 42;
$Zahl2 = 24;
$summe = $Zahl1 + $Zahl2;
echo "Die Summe aus $Zahl1 und $Zahl2 ist $summe .<br>";

$zahl1 = 42.42;
$zahl2 = 24.42;
$summe = $zahl1 + $zahl2;
echo "Die Summe der Kommazahlen ist $summe.<br>";

//NULL steht nicht für 0 sondern für "kein Wert", ist aber auch ein Datentyp
$nichts = NULL;
echo "Dem Doppelpunkt folgt absolut nichts: $nichts <br>";

//Boolean (boolean)
$serienJunkie = 2;
if ($serienJunkie == 1) {
  echo "Ich bin ein Serienjunkie. <br>";
} else {
  echo "Ich habe das falsche Kolleg gewählt. <br>";
}

$gepackterKoffer = ["T-Shirts", "Handtuch", "Zahnbürste", "Schmusedecke"];
echo $gepackterKoffer[3] . "<br>";

$gepackterRucksack = array("T-Shirts", "Handtuch", "Zahnbürste", "Schmusedecke");
echo $gepackterKoffer[3] . "<br>";

//Key&Value-syntax
$notenliste = ["John" => 1, "Paul" => "3", "George" => 4, "Ringo" => 2];
echo "Note für Ringo: " . $notenliste["Ringo"];


$i = 1;
$summe = 0;
$maximum = 1000;

for ($i; ($summe + $i) <= $maximum; $i++) {
    $summe += $i;
}

echo $summe . "<br>";
echo $i;



for ($i=1; $i<=100; $i++) {
  if ($i % 3 == 0 || stristr($i, "3")==="3") {
    continue;
  }
  echo $i . ", ";
}

$i = rand(1, 10);
$summe = 0;

for ($i; $summe + $i <= 1000; $i = rand(1,10)) {
  $summe += $i;
  echo $summe . ", ";
}

while ($summe + $i <= 1000) {
  $summe += $i;
  echo $summe . ", ";
}

function berechneAfa(...$params) {
  $numParams = count($params);
  $afa = 0;
    if ($numParams == 2) {
      $afa = $params[0]/$params[1];
    } else {
      $afa = $params[0] / $params[1] / 2;
    }
  echo "Die Jahresabschreibung beträgt: " . $afa;
}

berechneAfa(800, 5, false);

//Die Variable $name ist lokal nicht verfügbar
//Bsp 1:
$name = "Martin";

//Die Variable $name ist lokal nicht verfügbar
function servus() {
  echo "Servus " . $name;
}

servus();

Bsp 2:
Wäre eine Referenz auf die Variable übergeben worden (&$name), hätte sich der Wert der Variablen geändert
function hallo($name) {
  echo "<h1>Ausgabe in der Funktion: $name</h1>";
  $name = "Tom";
  echo "<h1>Geändert in der Funktion: $name</h1>";
 }

//Zuerst nur bis hier
hallo($name);
echo "<h1>Ausserhalb der Funktion: $name</h1>";


function infinite($zahl) {
  if ($zahl == 0) {
    return;
  }
  $zahl--;
  return $zahl;
}

$result = infinite(10);
echo $result;

$myArray = [
  "apple" => [
    "smartphones" => [
      "iPhone6", "iPhone7", "iPhone8"
    ],
    "macbooks" => [
      "macbook1", "macbook2"
    ]
  ],
  "mapple" => [
    "myphones" => [
      "myPhone6", "myPhone7", "myPhone8"
    ],
    "mybooks" => [
      "mybook1", "mybook2"
    ]
  ]
];

echo "<ul>";
foreach ($myArray as $hersteller => $kategorie) {
  echo "<li>" . $hersteller ."</li><ul>";
  foreach ($kategorie as $key => $value) {
    echo "<li>" . $key . "</li><ul>";
    foreach ($value as $produkt) {
      echo "<li>" . $produkt . "</li>";
    }
    echo "</ul>";
  }
  echo "</ul>";
}
echo "</ul>";

class Arbeitnehmer {
  public $anrede;
  public $vorname;
  public $nachname;
  public $jahreImU;

  function jahreImU($et, $em, $ej) {
    $jetzt = time();
    $jetztJahr = date("Y", $jetzt);
    $jetztMonat = date("m", $jetzt);
    $jetztTag = date("d", $jetzt);

    if($jetztMonat < $em || $jetztMonat == $em && $jetztTag < $et) {
      $this->jahreImU = $jetztJahr - $ej -1;
    } else {
      $this->jahreImUn = $jetztJahr - $ej;
    }
    echo "$this->anrede $this->vorname $this->nachname arbeitet seit $this->jahreImU Jahren bei uns.";
  }
}

$ma1 = new Arbeitnehmer();
$ma1->anrede = "Hr.";
$ma1->vorname = "Yevgeniy";
$ma1->nachname = "Nourish";
$ma1->jahreImU(3,2,1980);


class Unterkunft {
  public $vermieter;
  public $ausstattung;
  public $hausregeln;

  public function __construct($vermieter, $ausstattung, $hausregeln) {
    $this->vermieter = $vermieter;
    $this->ausstattung = $ausstattung;
    $this->hausregeln = $hausregeln;
  }

  public function update($ausstattung) {
    $this->ausstattung = $this->ausstattung . ", $ausstattung";
  }
}

class Appartment extends Unterkunft {
  public $anzahlSchlafzimmer;

  public function __construct($vermieter, $ausstattung, $hausregeln, $anzahlSchlafzimmer) {
    parent::__construct($vermieter, $ausstattung, $hausregeln);
    $this->anzahlSchlafzimmer = $anzahlSchlafzimmer;
  }
}

$u1 = new Unterkunft("Martin Zauner", "Standard", "Bettruhe um 22:00 Uhr");
var_dump($u1);

$apart1 = new Appartment("Donald T.", "", "Don´t use my twitter account", 28);
var_dump($aprt1);
$aprt1->update("nuclear button");
*/

/*
$reservierungen = [["22.02.2018", "28.02.2018"],["14.01.2018", "18.01.2018"],["20.01.2018", "28.01.2018"]];

$anreise = strtotime($_POST["anreise"]);
$abreise = strtotime($_POST["abreise"]);
$kollisionen = false;

foreach ($reservierungen as $von_bis) {
  if ($anreise < strtotime($von_bis[1]) && $abreise > strtotime($von_bis[0])) {
    $kollisionen = true;
    break;
  }
}
if ($kollisionen == true) {
echo "Im gewählten Zeitraum ist das Appartement leider belegt.";
}

function autoload($class) {
var_dump($class);
  if (file_exists("./../8_klassen&objekte/codestrukturierung/src/$class.php")) {
    require "./../8_klassen&objekte/codestrukturierung/src/$class.php";
  }
}

spl_autoload_register("autoload");

$klassentester = new Rechner("2.7 Ghz", "8 GB");
var_dump($klassentester);
*/
function foo() {
  echo "Aufgerufene Funktion";
}

call_user_func("foo");
?>
