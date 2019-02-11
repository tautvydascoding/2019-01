<h2>labas</h2>

<?php
require_once('db-functions.php');
//print_r($_GET);

$nr = $_GET['kintamasis'] ;
echo "numeris: $nr";

$gyd = getDoctors($nr);

print_r( $gyd );

echo "<h2>   Gydytojas: {$gyd['name']}   {$gyd['lname']}   </h2>";
echo "<h3>   Gydytojo numeris: $gyd['id']   </h3>";



 ?>
