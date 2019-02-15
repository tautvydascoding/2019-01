<?php
require_once("db-funkcijos.php");

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$tel = $_GET["tel"];
$email = $_GET["email"];

insertContacts($vardas, $pavarde, $tel, $email);
header('Location: contactsControl.php');
?>
