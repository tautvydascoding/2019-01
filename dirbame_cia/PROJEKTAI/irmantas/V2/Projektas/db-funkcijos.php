<?php


//Prisijungimas prie //


DEFINE("NAME", "v2video");
DEFINE("PASSWORD", "root"); // arba root
DEFINE("HOST", "localhost");
DEFINE("USER", "root"); // arba root

$prisijungimas = mysqli_connect(HOST, USER, PASSWORD, NAME ); //portas dar jeigu keistas MySQL arba Apasche
//ar pavyko prisijungt
// if($prisijungimas) {
//   echo "Prisijungti pavyko";
// } else {
//   echo "Nepavyko prisijungti prie DB" . mysqli_connect_error();
// }

function getPrisijungimas() {
    global $prisijungimas;
    return $prisijungimas;
}


function getContact($nr){
    $manoSQL = "SELECT * FROM contacts WHERE id = $nr ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );

    // print_r( $rezultatai  );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    // print_r( $rezultatai_masyvas  );
    return $rezultatai_masyvas;
}

function getContacts($nr=99999){
    $manoSQL = "SELECT * FROM contacts LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function insertMessage($vardas, $email, $tel, $message){
  $message = "INSERT INTO messages VALUES (NULL, '$vardas', '$email','$tel','$message')";
  $result = mysqli_query(getPrisijungimas(), $message);
  if ($result == true) {
    echo "Naujas zinute:";
  } else {
    echo " " .mysqli_error(getPrisijungimas());
  }
}


function getPaslaugos($nr=99999){
    $manoSQL = "SELECT * FROM paslaugos LIMIT $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    return $rezultatai;
}

function getAbout($nr){
    $manoSQL = "SELECT * FROM about WHERE $nr";
    $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
    $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
    return $rezultatai_masyvas;
}



// insertMessage("Dalius", "kazkas@gmail.lt", "+370546652","Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

// $pirmas = getContact(1);
// print_r($pirmas);
//
// function getContact($nr){
//     $manoSQL = "SELECT * FROM contacts WHERE id = $nr ";
//     // mysqli_query - ivykdo komandas (SQL kalba)
//     $rezultatai = mysqli_query(  getPrisijungimas(),    $manoSQL );
//
//     // print_r( $rezultatai  );
//     $rezultatai_masyvas = mysqli_fetch_assoc($rezultatai);
//     // print_r( $rezultatai_masyvas  );
//     return $rezultatai_masyvas;
// }





//neuzdaroma PHP,, ?>
<!-- kad nebutu enter simboliu ir tarp -->
