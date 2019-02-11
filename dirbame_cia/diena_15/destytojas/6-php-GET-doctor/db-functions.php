<?php

// Konstantos:
 DEFINE('NAME', "hospital2");
 DEFINE('PASSWORD', "tratata");  // arba root
 DEFINE('HOST', "localhost");
 DEFINE('USER', "tautvydas");  // arba root

$prisijungimas = mysqli_connect(HOST,  USER, PASSWORD, NAME );

// ar pavyko prisijungti prie DB
if ($prisijungimas) {
    // echo "Prisijungti prie DB pavyko.<BR />";
} else {
    echo "ERROR: Prisijungti prie DB nepavyko.<BR />" . mysqli_connect_error();
}
function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}


function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
    // print_r( $rezultatai_masyvas  );
    return $rezultatai_masyvas;
}
// testuojam
// $pirmasGydytojas = getDoctor(3);
// print_r(  $pirmasGydytojas );
//
// $pirmasGydytojas = getDoctor(1);
// print_r(  $pirmasGydytojas );




// neuzdarom PHP   nes    kad nebutu   tarpu simboliu
