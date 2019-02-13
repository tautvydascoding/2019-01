<?php

DEFINE("NAME", "hospital");
DEFINE("PASSWORD", "root");
DEFINE("HOST", "localhost");
DEFINE("USER", "root");

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);

// ar pavyko prisijungti

if($prisijungimas){
    // echo "Pavyko prisijungti <br />";
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

// $pirmasGydytojas = getDoctor(1);
// print_r($pirmasGydytojas);

// 5. createDoctor($vardas, $pavarde)
function createDoctor($vardas, $pavarde){
    $manoSQL = "INSERT INTO doctors  
                VALUES (NULL, '$vardas', '$pavarde')"; //tarp kabuciu textas, skaiciam nereikia
    $arPavyko = mysqli_query(getPrisijungimas(),$manoSQL );
    if($arPavyko == NULL){
        echo "ERROR, nevapyko sukurti $vardas, $pavarde";
        mysqli_error(getPrisijungimas()); // mysql_error - paima klaida is db 

    }
}
//gaunam tik php stringa

// createDoctor("Rita", "Ritute");
// createDoctor("Julija", "Mikute");
// createDoctor("Reda", "Liekyte");



// 6. deleteDoctor($nr)
function deleteDoctor($nr){
   $manoSQL = "DELETE FROM doctors WHERE id = '$nr' LIMIT 1 ";
   $arPavyko = mysqli_query(getPrisijungimas(),$manoSQL );
    if($arPavyko == NULL){
        echo "ERROR, nevapyko istrinti $nr";
}
}


// deleteDoctor(10);
// deleteDoctor(11);


// 7. updateDoctor($nr, $vardas, $pavarde)
function updateDoctor($nr, $vardas, $pavarde){
    $manoSQL = "UPDATE doctors SET name = '$vardas', lname = '$pavarde' 
                WHERE id = '$nr' LIMIT 1 ";
    $arPavyko = mysqli_query(getPrisijungimas(),$manoSQL );
     if($arPavyko == NULL){
         echo "ERROR, nevapyko pakeisti $nr, $vardas, $pavarde".
         mysqli_error(getPrisijungimas());
 }
 }
//  updateDoctor(8, "Reda", "Tamulyte");
// updateDoctor(11);

// 8. getDoctors($kiekGydytoju=99999) 
function getDoctors($kiekGydytoju=99999){ // fja gauti doctor duomenis

    $manoSQL = "SELECT * FROM doctors 
                ORDER BY lname DESC
                LIMIT $kiekGydytoju " ;
    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL); // prisijungimas ir ka norim daryti
    
     return $rezultatai; // mysql tipo objektas
}
$visigydytojai = getDoctors();


do {
    $gydytojas = mysqli_fetch_assoc($visigydytojai); //ima vis sekanti gydytoja is objekto
    print_r($gydytojas);
} while ($gydytojas != NULL);


    








