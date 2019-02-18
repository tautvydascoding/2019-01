<?php
//print_r($_GET);
require_once('db-functions.php');
//print_r($_GET);

$autorius = $_GET['autorius'];
$email = $_GET['email'];
$komentaras = $_GET['komentaras'];
$nr = $_GET['straipsnioid'];

createKomentaras($autorius, $email, $komentaras, $nr);

header("Location: straipsnis.php?xx=$nr");

 ?>
