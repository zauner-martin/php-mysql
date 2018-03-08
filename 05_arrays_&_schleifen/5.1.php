<?php
$temp = [32, 33, 35, 32, 28];
$tempLength = count($temp);

echo "<h3>Temperaturen Mo. - Fr.:</h3>";

for ($i = 0; $i < $tempLength; $i++) {
  $tempCelsius = round(($temp[$i] - 32) * 5/9);
  echo $tempCelsius . "<br>";
}

/* Alternative mit foreach:
foreach ($temp as &$value) {
  $value = round(($value - 32) * 5/9);
  echo "<p>$value</p>";
}
*/

?>
