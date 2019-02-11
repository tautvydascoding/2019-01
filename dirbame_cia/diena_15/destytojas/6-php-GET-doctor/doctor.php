<?php

require_once ('db-functions.php');

// print_r( $_GET );  // test

$nr = $_GET['kintamasis'];
// echo "numeris: $nr <br />"; // test

$gyt = getDoctor($nr);
// print_r( $gyt );  // test

echo "<h2 class='bg-danger'> Gytytojas:  {$gyt['name']}  {$gyt['lname']}       </h2>";
echo "<h3 class='bg-dark'> Gydytojo numeris:" . $gyt['id'] . "</h3>";
?>
