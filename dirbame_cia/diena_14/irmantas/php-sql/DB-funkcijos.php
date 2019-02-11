<?php


//Prisijungimas prie //


DEFINE("NAME", "hospital2");
DEFINE("PASSWORD", "root"); // arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "root"); // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME ); //portas dar jeigu keistas MySQL arba Apasche
//ar pavyko prisijungt
if($prisijungimas) {
  echo "Prisijungti pavyko";
} else {
  echo "Nepavyko prisijungti prie DB" . mysqli_connect_error();
}

function getDoctor($nr){

}

$pirmasGydytojas = getDoctor(1);
print_r($pirmasGydytojas);











//neuzdaroma PHP,, ?>
<!-- kad nebutu enter simboliu ir tarp -->
