<?php
//print_r($_GET);
require_once('db-functions.php');
//print_r($_GET);

$name = $_GET['vardas'];
$email = $_GET['email'];
// = $_GET['data'];

createPrenumeratorius($name, $email );
header('Location: index.php');


 ?>
