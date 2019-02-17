<?php
//print_r($_GET);
require_once('db-functions.php');
//print_r($_GET);

$autorius = $_GET['autorius'];
$email = $_GET['email'];
$komentaras = $_GET['komentaras'];
$_GET['xx'] = $straipsnioid;
$straipsnioid = $_GET['straipsnioid'];


//if (isset($_GET['$straipsnioid'])) {
  //$straipsnioid = $_GET['id'];
//}
// $_GET['data'];

createKomentaras($autorius, $email, $komentaras, $straipsnioid);
//header('Location: straipsnis.php');


 ?>
