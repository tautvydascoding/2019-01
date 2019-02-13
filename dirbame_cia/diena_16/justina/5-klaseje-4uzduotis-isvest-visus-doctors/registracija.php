<?php
require_once('db_functions.php'); //prasom viena karta;
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);

echo "Uzregistruotas gydytojas: $vard  $parv  ";
