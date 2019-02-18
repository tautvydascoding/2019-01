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
    $manoSQL = "SELECT * FROM klientu_klausimai WHERE id = $nr"; //issigalvotas kintamasis, tiesiog stringas, gali bet koki teksta rasyti.
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

//    print_r($rezultatai);
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);  // cia objekta ideda i masyva; jei reikia gauti duomenis, tam reikia sios eilutes, kad gautus duomenis issaugoti.
//      print_r($rezultatai_masyvas);
    return $rezultatai_masyvas;
}

function createDoctor($klientoVardas, $klientoPastas, $klientoAntraste, $klientoKlausimas) {
  $klientoVardasUzkoduotas = htmlspecialchars($klientoVardas, ENT_QUOTES);
  $klientoPastasUzkoduotas = htmlspecialchars($klientoPastas, ENT_QUOTES);
  $klientoAntrasteUzkoduotas = htmlspecialchars($klientoAntraste, ENT_QUOTES);
  $klientoKlausimasUzkoduotas = htmlspecialchars($klientoKlausimas, ENT_QUOTES);

  $manoSQL = "INSERT INTO klientu_klausimai
              VALUES (NULL, '$klientoVardas', '$klientoPastas', '$klientoAntraste', '$klientoKlausimas', NOW() ); ";
  $arPavyko= mysqli_query(getPrisijungimas(), $manoSQL );

    if ($arPavyko == NULL) {
      echo "ERROR. sukurti klausimo $klientoVardas, $klientoPastas, $klientoAntraste, $klientoKlausimas NEPAVYKO."
          .mysqli_error(gerPrisijungimas());  //mysqli_error - is DB paima klaida
    }

}
