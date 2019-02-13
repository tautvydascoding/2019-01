<?php

DEFINE("NAME", "hospital");
DEFINE("PASSWORD", "root");
DEFINE("HOST", "localhost");
DEFINE("USER", "root");

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);

// ar pavyko prisijungti

if($prisijungimas){
    echo "Pavyko prisijungti <br />";
}else {
    echo "nepavyko <br />" .mysql_connect_error();
}

//Prisijungimas
function getPrisijungimas(){
    global $prisijungimas;

    return $prisijungimas;
}




function getDoctor($nr){ // fja gauti doctor duomenis

$manoSQL = "SELECT * FROM doctors WHERE id = $nr"; // kuriuos duomenis norim paimt is DB
$rezultatai = mysqli_query( getPrisijungimas(), $manoSQL); // prisijungimas ir ka norim daryti

 
$rezultatai_masyvas = mysqli_fetch_assoc($rezultatai ); // konvertuoja info i skaicius ir raides
return $rezultatai_masyvas;

}

$pirmasGydytojas = getDoctor(1);
print_r($pirmasGydytojas);




