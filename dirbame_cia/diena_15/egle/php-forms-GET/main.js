console.log(   " mano js failas "  );

// 1. index.php faile sukurti HTML form'a naudojant metoda (GET) ir  su ivedimo laukais:
//  vardas, pavarde, telefonas, mygtukas 'registruotis'
//
// 2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila (formoje action='registracija.php')
//
// 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
// pvz.:
// print_r( $_GET);
//
// // PASIBANDYTI PAPILDOMAI
// pvz.: print_r( $GLOBALS)
//
//
//
// // UZDUOTIS
// // pasisveikinti su katik uzsiregistravusius zmogumi ir
// // graziai atspausdinti uzsiregistravusio zmoguas duomenis
//

//-------------------uzduotis 2.1
// 1. sukurti index.php
// 2. parasyti PHP koda:
    $x = $_GET['tekstas'];
    echo $x;
// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
 //     ?tekstas=Mano ivestas tekstas

// 4. Narsykleje  pakeisti zodi "tekstas" i koki nors kitoki
// 4.1 istaisyti klaidas index.php faile



//--------------------------uzdavinys 2.1.2------------------------//
/ 1. sukurti index.php
// 2. parasyti PHP koda:
    //  susikurti masyv1- preke1: kaina, pavadinimas, kiekis
    $numeris = $_GET['x'];
    echo $preke1[$numeris] . "<hr />";
// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
     ?x=1
 // 4. Narsykles adrese  pakeisti ?x=0
 // 4. Narsykles adrese  pakeisti ?x=2
 // ir paziureti kas bus

// 5.===============sunkesnis====================
 // A)  susikurti dar 2 masyvus  preke2, prek3
 // B) susikurti masyva 'visosPrekes'
 // C) sudeti visas prekes i masyva 'visosPrekes'
 // 6. parasyti PHP koda:
     $numeris = $_GET['x'];
     $manoPreke =  $visosPrekes[$numeris];
     print_r($manoPreke);
     echo "<hr />";
 // 7. pasileisti Narsykleje si puslapi
 // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
      ?x=1
  // 4. Narsykles adrese  pakeisti ?nr=0
  // 4. Narsykles adrese  pakeisti ?nr=2
  // ir paziureti kas bus

  // ----------------------------------uzduotis 2.2----------//

  // 1. sukurti tuscia porjekta (default)

  // 2. doctor.php faile parasyti PHP koda:
      $numeris = 2;
      $gydytojas = getDoctors( $numeris);
      echo $gydytojas[1] .  $gydytojas[2] ;
      echo $gydytojas["name"] .  $gydytojas['lname'] ;


  // 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
  // 3.1 istaisyti klaida: function 'getDoctors' not found
  // 3.1.1 isideti i projekta faila: db_functions.php

  // 3.1.2  i  faila  doctor.php parasyti:
  include('db_functions.php');

  // 4. faile  pakeisti $numeris = 3;
  // 4. faile  pakeisti $numeris = 4;
  // ir paziureti kas bus


  //----------------Uzduotis 2.3 ------------------------//

  // 1. sukurti tuscia porjekta (default)

  // 2. doctor.php faile parasyti PHP koda:
      $numeris = $_GET['nr'];
      $gydytojas = getDoctor( $numeris);
      echo $gydytojas[1] .  $gydytojas[2] ;
      echo $gydytojas["name"] .  $gydytojas['lname'] ;

  // 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
  // 3.1 istaisyti klaida: function 'getDoctors' not found
  // 3.1.1 isideti i projekta - faila: db_functions.php
  // 3.1.2  i  faila  doctor.php parasyti:
  include('db_functions.php');
  // 3.1.3 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
      doctor.php?nr=4

  // 4. Narsykles adrese  pakeisti ?nr=3
  // 4. Narsykles adrese  pakeisti ?nr=2
  // ir paziureti kas bus



//-----------------UZduotis 2.4----------------------------//


// 1. sukurti index.php
// 2. parasyti Forma su vienu ivedimo lauku:
//  elpastas ir mygtuku "subscribe"

// 2. kai paspaudzia 'subscribe',
// vartotoja perkelti i subscribe.php faila
// formoje action='subscribe.php'
//
// 3.
// 3. subscribe.php faile
// isvesti elpasta
// 5. subscribe.php faile suprogramuoti tikrinima:
// kad vartotojui nieko neivedus ismestu pranesima
// jeigu vartotojas kazka ivede - isvesti jo email i ekrana
// jeig vartotojas nieko neivede - isvesti pranesima, kad elpastas neivestas




// PVZ
// ar masyve egzistuoja stalcius pavadinimu "tekstas"
if ( array_key_exists('tekstas', $_GET) ){
    $x = $_GET['tekstas'];
    echo "stalcius 'tekstas' egzistuoja:" . $x .  "<hr />";
} else {
    echo "stalciaus tolkiu pavadinimu 'tekstas' nera";
}

$y;
// AR "y" turi kokia nors reiksme
if ( isset($y) ) {
    echo $y;
} else {
    echo "y neturi reiksmes <hr />";
}


//------------- Uzduotis 3 ------------------------------//


// uzduotis 2: atspausdinti gydytoja i <p> </p>, kurio 'id' yra 4
// uzduotis 3.1: atspausdinti visas gydytoju pavardes , kaip list item "ul li"
// uzduotis 3.2: patobulinti 'uzduotis3',
    kad paspaudus ant gydytojo pavardes   atidarytu doctor.php faila
// uzduotis 3.3:
        doctor.php faile isvesti info apie - paspausta gydytoja:
        vardas pavarde numeris

    HINT: 'a' nuorodoje, prideti '?kintamasis=...'   ir doctor.php faile su $_GET pasiimti kintamaji
