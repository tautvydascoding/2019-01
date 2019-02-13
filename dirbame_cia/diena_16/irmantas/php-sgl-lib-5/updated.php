<?php
include('db-functions.php');

$nr = $_GET["id"];
$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];


updateDoctor($nr, $vardas, $pavarde);
?>

<a href="index.php">Grizti atgal</a>
