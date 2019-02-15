<?php 
include("db_functions.php");
    
    $nr = $_GET['kintamasis'];
    echo "numeris:" . $_GET['kintamasis'];
    $gyd = getDoctor($nr);
    
    echo "<h2> Gydytojas:  {$gyd["name"]}  {$gyd["lname"]} </h2>";
    echo "<h2> Gydytojo numeris:  {$gyd["id"]} </h2>";

?>