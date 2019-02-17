<?php
require_once("db-funkcijos.php");
$nr = $_GET["nr"];
$pav = $_GET["pav"];
$aprasymas = $_GET["textas"];

updatePaslaugos($nr, $pav, $aprasymas);
header('Location: serviceControl.php');
?>
