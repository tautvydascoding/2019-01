<?php
// neuzdarom php, kad nebutu tarpu (space) simboliu

// 1. Prisijungimo f-ja. Konstantos, t.y. kintamieji, kurie negali kisti. Patartina juos uzvadint DIDZIOSIOMIS RAIDEMIS, kad kiti programuotojai suprastu:

DEFINE("NAME", "hospital2");
DEFINE("PASSWORD", "pass4ysql");  //arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "justess22");     // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME);  // mysqueli rasosi su i, nes naujesne versija. ja reik ir naudoti visada;

// tikriname, ar pavyko prisijungti:

if ($prisijungimas) {
  echo "Prisijungti prie DB pavyko. <br />";
} else {
  echo "ERROR: Prisijungti prie DB nepavyko. <br />".mysqli_connect_error();
}

// funkcija, kuri grazins $prisijungimas ten, kur bus panaudota si f-ja:

function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}



// 2. Paimti gydytojo, kurio id=3, duomenis:

function getDoctor($nr){  //vienaskaita, nes ieskai vieno id informacijos;
    $manoSQL = "SELECT * FROM doctors WHERE id = $nr"; //issigalvotas kintamasis, tiesiog stringas, gali bet koki teksta rasyti.
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

//    print_r($rezultatai);
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);  // cia objekta ideda i masyva; jei reikia gauti duomenis, tam reikia sios eilutes, kad gautus duomenis issaugoti.
//      print_r($rezultatai_masyvas);
    return $rezultatai_masyvas;
}

$pirmasGydytojas = getDoctor (1);  // isspausdins pirmo gydytojo duomenis i ekrana
print_r( $pirmasGydytojas);

$antrasGydytojas = getDoctor (2);  // isspausdins antro gydytojo duomenis i ekrana
print_r( $antrasGydytojas);

$treciasGydytojas = getDoctor (3);  // isspausdins trecio gydytojo duomenis i ekrana
print_r( $treciasGydytojas);

$ketvirtasGydytojas = getDoctor (4);  // isspausdins ketvirto gydytojo duomenis i ekrana
print_r( $ketvirtasGydytojas);

echo "<br />" . "-------" . "<br />";


// 3. Paimti paciento, kurio id=1, duomenis:

function getPatient($nr){  //vienaskaita, nes ieskai vieno id informacijos;
    $manoSQL = "SELECT * FROM patients WHERE id = $nr"; //issigalvotas kintamasis, tiesiog stringas, gali bet koki teksta rasyti.
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

//    print_r($rezultatai);
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);  // cia objekta ideda i masyva; jei reikia gauti duomenis, tam reikia sios eilutes, kad gautus duomenis issaugoti.
//      print_r($rezultatai_masyvas);
    return $rezultatai_masyvas;
}

$pirmasPacientas = getPatient (1);  // isspausdins pirmo paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (2);  // isspausdins antro paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (3);  // isspausdins trecio paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (4);  // isspausdins ketvirto paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (5);  // isspausdins penkto paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (6);  // isspausdins sesto paciento duomenis i ekrana
print_r( $pirmasPacientas);

$pirmasPacientas = getPatient (7);  // isspausdins septinto paciento duomenis i ekrana
print_r( $pirmasPacientas);

echo "<br />" . "-------" . "<br />";


// 4. Paimti nuotraukos, kurios id=1, duomenis:

function getImage($nr){  //vienaskaita, nes ieskai vieno id informacijos;
    $manoSQL = "SELECT * FROM images WHERE id = $nr"; //issigalvotas kintamasis, tiesiog stringas, gali bet koki teksta rasyti.
    $rezultatai = mysqli_query ( getPrisijungimas(),  $manoSQL);  // mysqli_query tiesiog ivykdo komandas; jei nori delete ar update, tai uztenka sios f-jos

//    print_r($rezultatai);
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);  // cia objekta ideda i masyva; jei reikia gauti duomenis, tam reikia sios eilutes, kad gautus duomenis issaugoti.
//      print_r($rezultatai_masyvas);
    return $rezultatai_masyvas;
}

$pirmaImage = getImage (1);  // isspausdins pirmo paciento duomenis i ekrana
print_r( $pirmaImage);

$pirmaImage = getImage (2);  // isspausdins antro paciento duomenis i ekrana
print_r( $pirmaImage);

$pirmaImage = getImage (3);  // isspausdins trecio paciento duomenis i ekrana
print_r( $pirmaImage);

$pirmaImage = getImage (4);  // isspausdins ketvirto paciento duomenis i ekrana
print_r( $pirmaImage);
