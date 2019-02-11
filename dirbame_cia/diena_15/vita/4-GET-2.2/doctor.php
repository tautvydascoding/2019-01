
<?php
require_once('db-functions.php');
$numeris = 3;
$gydytojas = getDoctors( $numeris);

///echo $gydytojas[1] .  $gydytojas[2] ;
echo $gydytojas["name"] .  $gydytojas['lname'] ;










?>
