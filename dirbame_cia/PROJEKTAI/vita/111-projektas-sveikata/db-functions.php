<?php

define("HOST", "localhost");
define("USER", "vitasido"); //arba root
define("PASSWORD", "mokausisql");
define("NAME", "blogaslinai");


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

mysqli_set_charset($prisijungimas,'utf8');

function getStraipsnis($nr){
$manoSQL = "SELECT * FROM straipsniai WHERE id = $nr";
$rezultatai = mysqli_query(  getPrisijungimas(),   $manoSQL   );

$rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
// print_r( $rezultatai_masyvas  );
return $rezultatai_masyvas;
//print_r( $rezultatai );
}

function getFoto($nr){
$manoSQL = "SELECT * FROM foto WHERE id = $nr";
$rezultatai = mysqli_query(  getPrisijungimas(),   $manoSQL   );

$rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
// print_r( $rezultatai_masyvas );
return $rezultatai_masyvas;
}

function createPrenumeratorius($vardas, $email) {
  $mamnoSQL = "INSERT INTO prenumeratoriai
                      VALUES (NULL, '$vardas', '$email', NOW() )" ; // funkc kurimo metu butinos kabutes aplink string kintamuosius
  $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
    if ($arPavyko == NULL) {
    echo "ERROR. sukurti prenumeratoriaus $vardas, $email nepavyko" . mysqli_error(getPrisijungimas()); //mysqli_error is DB paima klaida
    }
}

function getStraipsniai( $kiekStraipsniu=99999 ){
    $manoSQL = "SELECT * FROM straipsniai
                         ORDER BY  id ASC
                         LIMIT $kiekStraipsniu
                ";

    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    return $rezultatai; // mysql tipo Objektas - ne masyvas
}

function getStraipsnis2($nr){
    $manoSQL = "SELECT * FROM straipsniai WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
    // print_r( $rezultatai_masyvas  );
  //  return $rezultatai_masyvas;
}


//$pirmasStraipsnis = getStraipsnis(1);
//print_r(  $pirmasStraipsnis );
//$antrasStraipsnis = getStraipsnis(2);
//print_r(  $antrasStraipsnis );
//$treciasStraipsnis = getStraipsnis(3);
//print_r(  $treciasStraipsnis );
//$ketvirtasStraipsnis = getStraipsnis(4);
//print_r(  $ketvirtasStraipsnis );
//$penktasStraipsnis = getStraipsnis(5);
//print_r(  $penktasStraipsnis );
//$sestasStraipsnis = getStraipsnis(6);
//print_r(  $sestasStraipsnis );



//$rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
//return $rezultatai_masyvas;
//}

//testuojam
//$pirmasGydytojas = getDoctors(1);
//print_r($pirmasGydytojas);

//$pirmasGydytojas = getDoctor(1);
///print_r(  $pirmasGydytojas );

//neuzdarom  PHP ?>
