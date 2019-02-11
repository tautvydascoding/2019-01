<?php

define("HOST", "localhost");
define("USER", "vitasido"); //arba root
define("PASSWORD", "mokausisql");
define("NAME", "hospital2");


$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME); //JEI PORTAS NE 80, TAI IRASYTI IR PORTO NUMERI.

//tikrinam ar pavyko prisijngti
if ($prisijungimas) {
  echo "prisijungti prie db pavyko. <br/>";
} else {
  echo "error: nepavyko prie DB prisijungti. <br/>" . mysqli_connect_error();
}

function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}

function getDoctors($nr){
$manoSQL = "SELECT * FROM doctors WHERE id = $nr";
$rezultatai = mysqli_query(  getPrisijungimas(),   $manoSQL   );

//print_r( $rezultatai );
$rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
return $rezultatai_masyvas;
}

$pirmasGydytojas = getDoctors(1);
print_r($pirmasGydytojas);

$pirmasGydytojas = getDoctor(1);
print_r(  $pirmasGydytojas );

//neuzdarom  PHP ?> nes.... kad nebutu ENTER simboliu ir tarpu
