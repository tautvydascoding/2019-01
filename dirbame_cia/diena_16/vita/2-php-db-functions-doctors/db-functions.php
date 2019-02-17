<?php

// Konstantos:
 DEFINE('NAME', "hospital2");
 DEFINE('PASSWORD', "root");  // arba root
 DEFINE('HOST', "localhost");
 DEFINE('USER', "root");  // arba root

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

// UZDUOTIS
// 1. papildyti faila:  db_functions.php
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)
// 5. createDoctor($vardas, $pavarde)

function createDoctor($vardas, $pavarde) {
  $mamnoSQL = "INSERT INTO doctors
                      VALUES (NULL, '$vardas', '$pavarde')" ; // funkc kurimo metu butinos kabutes aplink string kintamuosius
  $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
if ($arPavyko == NULL) {
echo "ERROR. sukurti gydytojo $vardas, $pavarde nepavyko" . mysqli_error(getPrisijungimas()); //mysqli_error is DB paima klaida
}
}

//createDoctor("Gita", "Gitaitiene");
//createDoctor("Morta", "Mortaitiene");
//createDoctor("Jura", "Juriene");

// 6. deleteDoctor($nr)

function deleteDoctor($nr) {
$mamnoSQL = "DELETE FROM doctors
                    WHERE id = '$nr' LIMIT 1 ";
                    $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
                    if ($arPavyko == NULL) {
                    echo "ERROR. istrinti gydytojo $nr nepavyko" . mysqli_error(getPrisijungimas());
}
}
//deleteDoctor(7);


 //7. updateDoctor($nr, $vardas, $pavarde)
function updateDoctor($nr, $vardas, $pavarde){

  $mamnoSQL = "UPDATE doctors SET name = '$vardas',
                                  lname = '$pavarde'
                              WHERE id = '$nr'
                              LIMIT 1
              ";

              $arPavyko = mysqli_query( getPrisijungimas(), $mamnoSQL );
              if ($arPavyko == NULL) {
              echo "ERROR. pakeisti gydytojo $nr nepavyko" . mysqli_error(getPrisijungimas());
            } else {
              //echo "pavyko";
            }
}

//updateDoctor(6, "Gita", "Jonaitiene");

// 8. getDoctors($kiekGydytoju=99999)


function getDoctors( $kiekGydytoju=99999 ){
    $manoSQL = "SELECT * FROM doctors
                         ORDER BY  id ASC
                         LIMIT $kiekGydytoju
                ";

    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    return $rezultatai; // mysql tipo Objektas - ne masyvas
}

// testuojam
$visiGydytojai = getDoctors();
$gydytojas = mysqli_fetch_assoc( $visiGydytojai ); // mysqli_fetch_assoc is visu gydytoju paima viena eilute ir pavercia i array

// while ($gydytojas != NULL ) { // ar turim gydytojo duomenu
//   print_r(  $gydytojas );
//   echo "<hr/>";
//   $gydytojas = mysqli_fetch_assoc( $visiGydytojai ); // ima vis sekanti gydytoja is objekto kol jie baigiasi
// }

// susikurti nauja prjekta ir issivesti daktara is DB naudojant getDoctors() f-ja su while ar foreach
// createDoctor() paleidimas per narsykle

// 1.1 sukurti PHP faila  naujasGydytojas.php
// 1.2. faile paleisti:
//include('db_functions.php');
//createDoctor("Juozas", "Juozaitis");
// 1.3. Narsykleje nueiti:
    //localhost/ ... /naujasGydytojas.php

//deleteDoctor() paleidimas per narsykle
// 2.1. sukurti PHP faila  trintiGydytoja.php
// 2.2. faile paleisti:
//include('db_functions.php');
//deleteDoctor(4);
// 2.3. Narsykleje nueiti:
    //localhost/ ... /trintiGydytoja.php
