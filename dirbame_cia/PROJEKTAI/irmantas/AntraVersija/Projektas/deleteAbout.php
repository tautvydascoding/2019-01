<?php
require_once("db-funkcijos.php");

$nr = $_GET["nr"];

deleteAbout($nr);
header('Location: aboutControl.php');

?>
