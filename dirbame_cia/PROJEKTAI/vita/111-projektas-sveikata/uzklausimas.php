<?php
//print_r($_POST);
require_once('db-functions.php');
//print_r($_POST);

$name = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$email = $_POST['email'];
$uzklausimas = $_POST['uzklausimas'];
// = $_GET['data'];

createUzklausimas($name, $pavarde, $email, $uzklausimas);
header('Location: kontaktai.php');


 ?>
