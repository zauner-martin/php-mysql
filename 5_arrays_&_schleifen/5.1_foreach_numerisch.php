<?php
$temp = [32, 33, 35, 32, 28];

echo "<h3>Temperaturen Mo. - Fr.:</h3>";

foreach ($temp as &$value) {
  $value = ($value - 32) * 5/9;
}

foreach ($temp as $value) {
  echo round($value) . ", ";
}
?>
