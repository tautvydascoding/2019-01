<?php

define("HOST", "localhost");
define("USER", "vitasido"); //arba root
define("PASSWORD", "mokausisql");
define("NAME", "blogaslinai");


$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);

//tikrinam ar pavyko prisijngti
if ($prisijungimas) {
  //echo "prisijungti prie db pavyko. <br/>";
} else {
//  echo "error: nepavyko prie DB prisijungti. <br/>" . mysqli_connect_error();
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
                      VALUES (NULL, '$vardas', '$email', NOW() )" ;
  $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
    if ($arPavyko == NULL) {
    echo "ERROR. sukurti prenumeratoriaus $vardas, $email nepavyko" . mysqli_error(getPrisijungimas());
    }
}

function createKomentaras($autorius, $email, $komentaras, $straipsnioid) {
  $mamnoSQL = "INSERT INTO komentarai
                      VALUES (NULL, '$autorius', '$email', '$komentaras', $straipsnioid, NOW() )" ;

  $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
    if ($arPavyko == NULL) {
    echo "ERROR. sukurti komentaro $autorius, $komentaras, $email nepavyko" . mysqli_error(getPrisijungimas());
    }
}


function getStraipsniai( $kiekStraipsniu=99999 ){
    $manoSQL = "SELECT * FROM straipsniai
                         ORDER BY  id ASC
                         LIMIT $kiekStraipsniu
                ";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}


function getStraipsnis2($nr){
    $manoSQL = "SELECT * FROM straipsniai WHERE id = $nr ";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc(  $rezultatai);
    // print_r( $rezultatai_masyvas  );
   return $rezultatai_masyvas;
}

 ?>
