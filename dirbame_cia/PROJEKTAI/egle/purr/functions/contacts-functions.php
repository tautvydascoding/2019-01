<?php

// Connection to Database:
DEFINE('NAME', "purrplayground");
DEFINE('PASSWORD', "kitakyushu");  // root
DEFINE('HOST', "localhost");
DEFINE('USER', "egle");  //  root

$prisijungimas = mysqli_connect(HOST,  USER, PASSWORD, NAME );

// test if connected to DB:
// if ($prisijungimas) {
//    echo "connected successfully.<BR />";
// } else {
//    echo "ERROR: Connection has failed .<BR />" . mysqli_connect_error();
// }

// function that returns connection to DB:
function getPrisijungimas() {
   global $prisijungimas;
   return $prisijungimas;
}
mysqli_set_charset($prisijungimas, 'utf8');
//-----------------------------------------------



function getContact($no){
  $mySQL = "SELECT * FROM contacts WHERE id = $no";
  $results = mysqli_query( getPrisijungimas(), $mySQL);
  $resultsArray = mysqli_fetch_assoc($results);
  return $resultsArray;

}

$Contacts= getContact(1);
// print_r ($catInfo['name']);

// echo $Contacts ['address'];

function getAllContacts($contactsNo = 99999){
    $mySQL = "SELECT * FROM contacts
                         LIMIT  $contactsNo
                ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $results = mysqli_query(  getPrisijungimas(),    $mySQL );

    return $results; // mysqli tipo OBJEKTAS - NE masyvas
}

 $allContacts = getAllContacts();
 $contact =  mysqli_fetch_assoc( $allContacts );
 while ( $contact != NULL ) { // ar turim  duomenu
     // print_r(  $contact  );
     // echo "<hr />";
     $contact =  mysqli_fetch_assoc( $allContacts   ); // ima VIS SEKANTI contakt is objekto
     // echo $result;
    }

    $result = $contact;

 echo $result;

  // return $results; // mysqli tipo OBJEKTAS - NE masyvas









?>
