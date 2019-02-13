
<?php

include("db_functions.php");

// $vard = $_GET['vardas'];
// $pavard = $_GET['pavarde'];
// $vardoilgis = strlen($vard);
// $pavardesilgis = strlen($pavard);
// if($vard == "" || $pavard == "" ){
//     echo "registracija neivyko";
// }else if($vardoilgis < 2 && $pavardesilgis < 2){    
//     echo "per trumpa ivestis";
// }else{
//     createDoctor($vard, $pavard);
//     echo "<h2> Sekmingai uzregistravom gydytoja </h2>";
// }
    
// // // // ideti foto

// function createImage($name, $patients_id){
//     $manoSQL = "INSERT INTO images  
//                 VALUES (NULL, '$name', '$patients_id' )"; //tarp kabuciu textas, skaiciam nereikia
//     $arPavyko = mysqli_query(getPrisijungimas(),$manoSQL );
//     if($arPavyko == NULL){
//         echo "ERROR, nevapyko sukurti $name, $patients_id";
//         mysqli_error(getPrisijungimas()); // mysql_error - paima klaida is db 

//     }
// }

// $foto = $_GET['pavadinimas'];
// $patient_nr = $_GET['patients_nr'];
// createImage($foto, $patient_nr);
//     echo "<h2> Sekmingai priskyrem foto </h2>";
// print_r($_GET);
// $vienas = $_GET['var'];
// $du = $_GET['pav'];
// createDoctor($vienas, $du);
$visigydytojai = getDoctors();
$gydytojas = mysqli_fetch_assoc($visigydytojai);
$numeris = $_GET["nr"];
while($gydytojas){
    echo "<h2>" . $gydytojas['name'] . $gydytojas['lname'] .
                "<a href='trintigydytoja.php?nr=$numeris'>Salinti</a>".                                         "</h2>" ;

$gydytojas = mysqli_fetch_assoc($visigydytojai);
}
// print_r($visigydytojai);


?>


