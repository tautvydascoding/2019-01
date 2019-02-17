<?php
require_once("db-funkcijos.php");
$nr = $_GET["nr"];
deletePaslauga($nr);
header('Location: serviceControl.php');
?>
