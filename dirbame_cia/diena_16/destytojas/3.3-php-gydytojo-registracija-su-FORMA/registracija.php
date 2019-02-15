<?php

require_once( "db-functions.php");

print_r( $_GET );   // test

$v = $_GET['vardas'];
$p = $_GET['pavarde'];

echo "v ir p yra: $v   $p ";  // test

createDoctor( $v ,  $p);
?>

<h2>  Gydytojas uzregistuotas sekmingai </h2>
