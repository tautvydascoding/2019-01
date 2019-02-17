<?php
require_once("db-funkcijos.php");
$nr = $_GET["nr"];
$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$tel = $_GET["tel"];
$email = $_GET["email"];

updateContacts($nr, $vardas, $pavarde, $tel, $email);
header('Location: contactsControl.php');
?>
