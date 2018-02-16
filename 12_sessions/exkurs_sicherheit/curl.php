<?php

$ch = curl_init("http://localhost/ainf_4_kol/php-mysql/16_sessions/daten_schreiben.php");
$zieldatei = fopen("datei.txt", "w");
curl_setopt($ch, CURLOPT_FILE, $zieldatei);
curl_exec($ch);
curl_close($ch);
fclose($zieldatei);

?>
