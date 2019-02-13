<?php

include('db-functions.php');

$gydytojoVardas = $_GET["gydytojoVardas"];
$gydytojoPavarde = $_GET["gydytojoPavarde"];

createDoctor($gydytojoVardas, $gydytojoPavarde);


?>
