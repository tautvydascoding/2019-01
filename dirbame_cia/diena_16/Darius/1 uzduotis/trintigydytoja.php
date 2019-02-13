<?php
include("db_functions.php");

$numeris = $_GET["numeris"];
deleteDoctor($numeris);
echo "<h2> Sekmingai istrintas gydytojas . $numeris </h2>";




?>