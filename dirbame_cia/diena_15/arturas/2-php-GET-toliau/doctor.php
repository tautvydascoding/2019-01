<?php
include('db-functions.php');
$numeris = 3;
$gydytojas = getDoctor($numeris);
// echo $gydytojas[1].$gydytojas[2];
echo $gydytojas["name"]." ".$gydytojas['lname'];
