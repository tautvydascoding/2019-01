<?php
require_once('db_functions.php'); //prasom viena karta;


$numeris = $_GET["nr"];
$gydytojas = getDoctor( $numeris);
echo $gydytojas[1] .  $gydytojas[2] ;
echo "<hr />";
echo $gydytojas["name"] .  $gydytojas["lname"] ;
 ?>
