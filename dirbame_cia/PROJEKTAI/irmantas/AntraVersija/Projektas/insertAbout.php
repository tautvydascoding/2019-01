<?php
require_once("db-funkcijos.php");

$vardas = $_POST["vardas"];
$pavarde = $_POST["pavarde"];
$foto = $_POST["foto"];
$aprasymas = $_POST["aprasymas"];

insertAbout($vardas, $pavarde, $foto, $aprasymas);
header('Location: aboutControl.php');

?>
