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
    echo " ERROR: Prisijungti prie DB nepavyko. <br />". mysqli_connect_error(); //<- 'mysqli_connect_error' ismeta kas per klaida, kodel nepavyko prisijungti//
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

// tesstuojam ar veikia:
  // $pirmasGydytojas = getDoctor(3);
  // print_r($pirmasGydytojas);
  //
  // $pirmasGydytojas = getDoctor(1);
  // print_r($pirmasGydytojas);

// 5. CreateDoctor ($vardas, $pavarde)

function createDoctor($vardas, $pavarde){
  $manoSQL= "INSERT INTO doctors
                    VALUES(NULL,'$vardas', '$pavarde' );"; //<- visada rasyti kabutese!!!! //
  $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
if ($arPavyko == NULL) {
  echo "ERROR. sukurti gydytojo $vardas, $pavarde nepavyko. " . mysqli_error(getPrisijungimas()) ;//<- komanda mysqli_errror parodo klaida is duomenu bazes
    }
}

// createDoctor("Gita", "Gitaitiene");
// createDoctor("Morta", "Mortaite");
// createDoctor("Rimas", "Rimaitis");


//6. deleteDoctor

function deleteDoctor($nr){
$manoSQL = "DELETE FROM doctors WHERE id ='$nr' LIMIT 1 ";
$arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
if ($arPavyko == NULL) {
echo "ERROR. istrinti gydytojo $nr nepavyko. " . mysqli_error(getPrisijungimas()) ;//<- komanda mysqli_errror parodo klaida is duomenu bazes
  }
}


// deleteDoctor(9);
// deleteDoctor(11);




// 7. updateDoctor


function updateDoctor($nr, $vardas, $pavarde){
$manoSQL = "UPDATE doctors SET name = '$vardas',
                              lname = '$pavarde'
                            WHERE id = '$nr'
                            LIMIT 1
          ";
          $arPavyko = mysqli_query( getPrisijungimas(), $manoSQL);
          if ($arPavyko == NULL) {
          echo "ERROR. pakeisti gydytojo $nr nepavyko. " . mysqli_error(getPrisijungimas()) ;//<- komanda mysqli_errror parodo klaida is duomenu bazes
            }
}

updateDoctor(8, "Rimas", "Kiausinis");


//8. getDoctors  <--- visu gydytoju paemimas

function getDoctors($kiekGydytoju = 99999){
    $manoSQL = "SELECT * FROM doctors
                         ORDER BY  id   DESC
                         LIMIT  $kiekGydytoju
                ";

while ($gydytojas != NULL) {  // ar turim gydytojo duomenu
  print_r($gydytojas);
  echo "<hr />"
  $gydytojas = mysqli_fetch_assoc($visiGydytojai); //ima vis sekanti gydytoja is objekto ir apsaugo, kad loop nebutu infinite
}


// -------------------ND-------------------//

// function getPatients($nr){
//   $manoSQL = "SELECT * FROM patients WHERE id = $nr";
//   $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
//   $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
//   return $rezultatai_masyvas;
// }

// $pacientas = getPatients(1);
// print_r($pacientas);
// $pacientas = getPatients(2);
// print_r($pacientas);
// $pacientas = getPatients(3);
// print_r($pacientas);
// $pacientas = getPatients(4);
// print_r($pacientas);
// $pacientas = getPatients(5);
// print_r($pacientas);
// $pacientas = getPatients(6);
// print_r($pacientas);
// $pacientas = getPatients(7);
// print_r($pacientas);


// function getImages(){
//   $manoSQL = "SELECT * FROM images";
//   $rezultatai = mysqli_query( getPrisijungimas(), $manoSQL);
//   $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
//   return $rezultatai_masyvas;
// }












//neuzdarom PHPjei visam faile yra tik PHP kad nebutu 'enter' ir tarpu simboliu ?>
