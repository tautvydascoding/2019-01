<?php
require_once("db-funkcijos.php");
$pav = $_POST["pav"];
$aprasymas = $_POST["apr"];

insertPaslauga($pav, $aprasymas);
header('Location: serviceControl.php');
?>
