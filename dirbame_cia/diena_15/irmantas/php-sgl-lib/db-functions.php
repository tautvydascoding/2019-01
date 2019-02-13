<?php

// Konstantos:
 DEFINE('NAME', "hospital2");
 DEFINE('PASSWORD', "root");  // arba root
 DEFINE('HOST', "localhost");
 DEFINE('USER', "root");  // arba root

$prisijungimas = mysqli_connect(HOST,  USER, PASSWORD, NAME );

// ar pavyko prisijungti prie DB
if ($prisijungimas) {
    echo "Prisijungti prie DB pavyko.<BR />";
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

function createDoctor($vardas, $pavarde){
  $createDoctor = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde')";
  $result = mysqli_query(getPrisijungimas(), $createDoctor);
  if ($result == true) {
    echo "Naujas gydytojas:" . $vardas . " " . $pavarde ;
  } else {
    echo "nepavyko sukurti gydytojo".mysqli_error(getPrisijungimas());
  }
}

function deleteDoctor($nr) {
  $deletedDoctor = "DELETE FROM doctors WHERE id = $nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $deletedDoctor);
  if ($result == true) {
    echo "Gydytojas istrintas is DB";
  } else {
    echo "nepavyko istrinti pasirinkto gydytojo";
  }
}

function updateDoctor($nr, $vardas, $pavarde){
  $updatedDoctor = "UPDATE doctors SET name = '$vardas', lastname = '$pavarde' WHERE id=$nr LIMIT 1";
  $result = mysqli_query(getPrisijungimas(), $updatedDoctor);
  if ($result == true) {
    echo "Gydytojas atnaujintas DB";
  } else {
    echo "nepavyko atnaujinti pasirinkto gydytojo duomenu";
  }
}

// updateDoctor(1,"Antanas","Gostautas");

function getDoctors($kiekGydytoju=99999){
    $manoSQL = "SELECT * FROM doctors LIMIT $kiekGydytoju";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    // $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
}

$gydytojai = getDoctors() ;


  while ($gydytojas = mysqli_fetch_assoc($gydytojai)) {
    print_r($gydytojas);
    // $gydytojas = mysqli_fetch_assoc($gydytojai);
  }


// $pirmasGydytojas = getDoctor(2);
// print_r(  $pirmasGydytojas );
//
// $pirmasGydytojas = getDoctor(1);
// print_r(  $pirmasGydytojas );



// neuzdarom PHP   nes    kad nebutu   tarpu simboliu
