<?php



require_once("db-functions.php");
print_r($_GET);
echo "<hr />";
$vard = $_GET['vardas'];
$parv = $_GET['pavarde'];
createDoctor($vard, $parv);


echo "<h2> Sekmingai uzregistravome gydytoja </h2>";
