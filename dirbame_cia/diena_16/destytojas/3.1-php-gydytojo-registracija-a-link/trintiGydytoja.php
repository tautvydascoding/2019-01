<?php



require_once("db-functions.php");
print_r($_GET);
echo "<hr />";
$xx = $_GET['nr'];
echo "nr yra:  $xx" ;
deleteDoctor($xx);


echo "<h2> Sekmingai istryneme gydytoja nr: 22 </h2>";
