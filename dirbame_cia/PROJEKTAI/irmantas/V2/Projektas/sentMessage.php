<?php

require_once("db-funkcijos.php");
$vardas = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$message = $_POST["message"];
insertMessage($vardas, $email, $tel, $message);
header('Location: kontaktai.php'); 

?>
