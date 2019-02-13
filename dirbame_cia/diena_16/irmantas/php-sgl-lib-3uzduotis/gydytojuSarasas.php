<?php
include('db-functions.php');
$gydytojai = getDoctors();
  while ($gydytojas = mysqli_fetch_assoc($gydytojai)) {
    echo "Id:" . $gydytojas["id"] . " Vardas: " . $gydytojas["name"] . " Pavarde: " . $gydytojas["lastname"] . "<br>";
}
?>
