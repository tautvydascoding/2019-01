<?php
//issikviesti database apie gydytojus
require_once('database-functions.php');

$numeris = 3;
$gydytojas = getDoctor( $numeris);
// echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"]. " " .  $gydytojas['lname'] ;




 ?>
