<?php

include('db-functions.php');
$nr = $_GET["Id"];
$doctor = getDoctor($nr);
$tId = $doctor['id'];
echo "<h2>Eiles nr:" . $doctor['id'] . "</h2>";
echo "<h3>Vardas:"  . $doctor['name'] . "Pavarde:" . $doctor['lastname'] .  "</h3>";
echo "<a href='trintiGydytoja.php?tId=". $tId . "' class=''>             Trinti</a><br />";
?>
