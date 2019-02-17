<?php
// neuzdarom php, kad nebutu tarpu (space) simboliu

// 1. Prisijungimo f-ja. Konstantos, t.y. kintamieji, kurie negali kisti. Patartina juos uzvadint DIDZIOSIOMIS RAIDEMIS, kad kiti programuotojai suprastu:

DEFINE("NAME", "vmprojektas");
DEFINE("PASSWORD", "pass4ysql");  //arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "justess22");     // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);  // mysqueli rasosi su i, nes naujesne versija. ja reik ir naudoti visada;
//jei keiciasi mysql porta, reik nurodyti skliausteliuose (HOST, USER, PASSWORD, NAME, 8889) arba jei su Wordpress jei dirbsi
// tikriname, ar pavyko prisijungti:

if ($prisijungimas) {
//  echo "Prisijungti prie DB pavyko. <br />"; //uzkomentuota, nes jei pasileidzia, mums nereikia zinoti, o jei nepavyko, reikia matyt error.
} else {
  echo "ERROR: Prisijungti prie DB nepavyko. <br />". mysqli_connect_error(); //ismes, KODEL nepavyko prisijungti. Ar blogas user name ar password ir pan.
}

// funkcija, kuri grazins $prisijungimas ten, kur bus panaudota si f-ja:

function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}

// 1. papildyti faila:  db_functions.php

// 2. Paimti gydytojo, kurio id=3, duomenis:

function getDoctor($nr){  //vienaskaita, nes ieskai vieno id informacijos;
    $nrUzkoduotas = htmlspecialchars($nr, ENT_QUOTES);
    $manoSQL = "SELECT * FROM grupesinfo WHERE id = $nr"; //issigalvotas kintamasis, tiesiog stringas, gali bet koki teksta rasyti.
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

//    print_r($rezultatai);
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);  // cia objekta ideda i masyva; jei reikia gauti duomenis, tam reikia sios eilutes, kad gautus duomenis issaugoti.
//      print_r($rezultatai_masyvas);
    return $rezultatai_masyvas;
}

// 8. getDoctors($kiekGydytoju=99999)

function getDoctors($kiekGydytoju=99999){  //daugiskaita, nes ieskai visu;
    $kiekGydytojuUzkoduotas = htmlspecialchars($kiekGydytoju, ENT_QUOTES);
    $manoSQL = "SELECT * FROM grupesinfo
                        ORDER BY id ASC
                        LIMIT $kiekGydytoju"; // LIMIT visada paskutinis, ORDER BY id DESC isves naujausius ivestus (e-shope naujausias prekes)
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

    return $rezultatai; //mySQL tipo OBJEKTAS, ne MASYVAS
}

//testuojam
// $visiGydytojai = getDoctors (); //jei irasysi (3), tai isves tik 3 gydytojus. Tai eshope gali padaryt, kad rodytu tik 24 prekes ar pan.
// $gydytojas = mysqli_fetch_assoc($visiGydytojai); // mysqli_fetch_assoc is visu gydytoju paima viena gydytoja ir pavercia objekta i masyva. Dar karta paleidus ji ima jau sekancia eilute.
//
// while ($gydytojas = mysqli_fetch_assoc($visiGydytojai)) { //tikrinam, ar $gydytojas != NULL, o reikia rasyti su fetch, nes jis ima vis sekanti gydytoja is objekto.
//   print_r( $gydytojas);
// }
