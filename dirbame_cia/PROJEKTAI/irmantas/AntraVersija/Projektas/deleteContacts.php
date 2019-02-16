<?php
require_once("db-funkcijos.php");

$nr = $_GET["nr"];

deleteContacts($nr);
header('Location: contactsControl.php');
?>
