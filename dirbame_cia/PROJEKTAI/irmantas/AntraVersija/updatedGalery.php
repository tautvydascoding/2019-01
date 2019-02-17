<?php
require_once("db-funkcijos.php");

$nr = $_GET["nr"];
$title = $_GET["title"];
$link = $_GET["link"];

updateVideo($nr, $title, $link);

header('Location: galeryControl.php');
?>
