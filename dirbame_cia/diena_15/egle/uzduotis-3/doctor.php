

<?php

require_once('database-functions.php');



// print_r($_GET);
$nr = $_GET['doctorInfo'];
echo "numeris: $nr <br />";
$doc = getDoctor($nr);
echo "<h2> Gydytojas: {$doc['name']} {$doc['lname']} </h2>";
echo "<h3> Gydytojo numeris: {$doc['id']}</h3>";
?>
