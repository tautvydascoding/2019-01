<?php

// Konstantos:
 DEFINE('NAME', "hospital2");
 DEFINE('PASSWORD', "root");  // arba root
 DEFINE('HOST', "localhost");
 DEFINE('USER', "root");  // arba root

$prisijungimas = mysqli_connect(HOST,  USER, PASSWORD, NAME );

// ar pavyko prisijungti prie DB
if ($prisijungimas) {
    echo "Prisijungti prie DB pavyko.<BR />";
} else {
    echo "ERROR: Prisijungti prie DB nepavyko.<BR />" . mysqli_connect_error();
}
function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}


function getImages($nr){
    $manoSQL = "SELECT * FROM images WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
    // print_r( $rezultatai_masyvas  );
    return $rezultatai_masyvas;
}
$nuotrauka1 = getImages(3);
print_r(  $nuotrauka1 );

$nuotrauka2 = getImages(1);
print_r(  $nuotrauka2 );




// neuzdarom PHP   nes    kad nebutu   tarpu simboliu
