<?php
require_once('db_functions.php'); //prasom viena karta;

$numeris = 4;  //isveda i narsykle /doctor.php id=4 daktaro varda "name" ir pavarde "lname".
$gydytojas = getDoctor( $numeris);
// echo $gydytojas[1] .  $gydytojas[2] ; neteisinga, nera tokio index'o, yra tekstai, o ne skaiciai
// echo "<hr />";
echo $gydytojas["name"] .  $gydytojas["lname"] ;


 ?>
