<?php
require_once ("db_functions.php");

// print_r($_GET); //pasitikrinimas, ar turim duomenis

$nr = $_GET ["kintamasis"];
// echo "numeris: $nr <br />"; //testuojam, ar yra duomenys

$gyt = getDoctor($nr);
// print_r($gyt); //testuojam, ar yra duomenys

echo "<h2>  Gydytojai: {$gyt["name"]} {$gyt["lname"]}  </h2>";
echo "<h3> Gydytojo numeris:" . $gyt["id"] . "</h3>";

 ?>
