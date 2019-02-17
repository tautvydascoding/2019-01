<?php
//Konstantos kuriamos is didziuju raodziu:

DEFINE("NAME", "hospital2");
DEFINE("PASSWORD", "kitakyushu");
DEFINE("HOST", "localhost");
DEFINE("USER", "egle");

//susikurti kintamaji ir nurodyti serverio info
$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME, 3306);

// patikrinti ar pavyko prisijungti
if ($prisijungimas){
    echo " Prisijungti prie DB pavyko. <br />";
  }else {
    echo " ERROR: Prisijungti rpie DB nepavyko. <br />". mysqli_connect_error();
  }

//functions kuri grazins prisijungima:
function getPrisijungimas(){
  global $prisijungimas;
  return $prisijungimas;
}



//funckija iskviecianti info is sql prisijungiant su php prie sql
  function getDoctor($nr){
    $manoSQL = "SELECT * FROM doctors WHERE id = $nr";
    //mysqli_querry - ivykdo komandas(SQL kalba)

    $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);

  //  print_r($rezultatai);


  // mysqli_fetch_assoc naudojamas kad informacija is sql butu perduota i php ir matoma
  $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);

  // print_r($rezultatai_masyvas);
  return $rezultatai_masyvas;
  }

  $pirmasGydytojas = getDoctor(3);
  print_r($pirmasGydytojas);

  $pirmasGydytojas = getDoctor(1);
  print_r($pirmasGydytojas);

// -------------------ND-------------------//

function getPatients($nr){
  $manoSQL = "SELECT * FROM patients WHERE id = $nr";
  $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
  $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
  return $rezultatai_masyvas;
}

$pacientas = getPatients(1);
print_r($pacientas);
$pacientas = getPatients(2);
print_r($pacientas);
$pacientas = getPatients(3);
print_r($pacientas);
$pacientas = getPatients(4);
print_r($pacientas);
$pacientas = getPatients(5);
print_r($pacientas);
$pacientas = getPatients(6);
print_r($pacientas);
$pacientas = getPatients(7);
print_r($pacientas);


function getImages(){
  $manoSQL = "SELECT * FROM images";
  $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
  $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
  return $rezultatai_masyvas;
}












//neuzdarom PHPjei visam faile yra tik PHP kad nebutu 'enter' ir tarpu simboliu ?>
