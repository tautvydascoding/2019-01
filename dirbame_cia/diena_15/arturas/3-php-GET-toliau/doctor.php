<?php
include('db-functions.php');
$numeris = $_GET['nr'];
$gydytojas = getDoctor($numeris);
echo "<p>Gydytojas: ".$gydytojas['name']." ".$gydytojas['lname']." Numeris: ".$gydytojas['id']."</p>";
