<?php
require_once("db-funkcijos.php");

$nr = $_POST["nr"];
$vardas = $_POST["vardas"];
$pavarde = $_POST["pavarde"];
$foto = $_POST["foto"];
$aprasymas = $_POST["aprasymas"];

updateAbout($nr, $vardas, $pavarde, $foto, $aprasymas);
header('Location: aboutControl.php');

?>
