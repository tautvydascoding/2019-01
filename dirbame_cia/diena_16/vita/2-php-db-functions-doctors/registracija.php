

<?php

require_once('db-functions.php');
print_r($_GET);

$name = $_GET['vardas'];
$lname = $_GET['pavarde'];

createDoctor($name, $lname);

 ?>
