<?php

include('db-functions.php');
$vard = $_GET['vard'];
$parv = $_GET['parv'];

print_R ($_GET);

createDoctor($vard, $parv);

echo "sukuriau";




 ?>
