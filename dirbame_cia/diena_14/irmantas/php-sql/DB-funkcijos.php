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
$pirmasGydytojas = getDoctor(3);
print_r(  $pirmasGydytojas );

$pirmasGydytojas = getDoctor(1);
print_r(  $pirmasGydytojas );











//neuzdaroma PHP,, ?>
<!-- kad nebutu enter simboliu ir tarp -->
