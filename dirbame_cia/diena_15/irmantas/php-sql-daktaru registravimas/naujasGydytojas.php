<?php
include('db-functions.php');

$gydytojoVardas = $_GET["vardas"];
$gydytojoPavarde = $_GET["pavarde"];

createDoctor($gydytojoVardas, $gydytojoPavarde);

?>
