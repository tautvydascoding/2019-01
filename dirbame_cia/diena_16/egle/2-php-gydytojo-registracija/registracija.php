<?php
// Naujo gydytojo registracijos forma :
require_once ('db-functions.php');

$vard = $_GET['vard'];
$parv = $_GET['parv'];
echo " <h3> uzregistruota : $vard $parv </h3>";

createDoctor($vard, $parv);










 ?>
