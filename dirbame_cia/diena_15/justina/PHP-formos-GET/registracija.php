<?php
 print_r ( $_GET );  //ispausdina get
echo "<hr />";
print_r ( $_POST ); //ispausdina post (nieko nera, nes uzkoduota)
echo "<hr />";

// print_r( $GLOBALS);

echo "Sveiki," . $_GET["vardas"] . "<br />";  // pasisveikinimas su vartotoju, kuris ka tik prisiregistravo
echo "<hr />";
echo "Vardas:" . $_GET["vardas"] . "<br />" . "Pavarde:" . $_GET["pavarde"] . "<br />" . "Telefonas:" . $_GET["telefonas"]

 ?>
