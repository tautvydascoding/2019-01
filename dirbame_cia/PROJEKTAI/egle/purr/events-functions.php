<?php

DEFINE('NAME', "purrplayground");
DEFINE('PASSWORD', "kitakyushu");  // root
DEFINE('HOST', "localhost");
DEFINE('USER', "egle");  //  root

$prisijungimas = mysqli_connect(HOST,  USER, PASSWORD, NAME );

// test if connected to DB:
if ($prisijungimas) {
   echo "connected successfully.<BR />";
} else {
   echo "ERROR: Connection has failed .<BR />" . mysqli_connect_error();
}

// function that returns connection to DB:
function getPrisijungimas() {
   global $prisijungimas;
   return $prisijungimas;
}
mysqli_set_charset($prisijungimas, 'utf8');

// ------------------------------------------------------//

  function getEvents($eventNo = 99999){
    $mySQL = "SELECT * FROM events ";
    // mysqli_query - ivykdo komandas (SQL kalba)
    $results = mysqli_query(  getPrisijungimas(),    $mySQL );

    return $results;
}


// function getEventList(){
$allEvents= getEvents();

  function createVisitor($name, $surname, $email, $phone, $comment) {
    $nameEncrypted = htmlspecialchars ($name, ENT_QUOTES);
    $surnameEncrypted = htmlspecialchars ($surname, ENT_QUOTES);
    $emailEncrypted = htmlspecialchars ($email, ENT_QUOTES);
    $phoneEncrypted = htmlspecialchars ($phone, ENT_QUOTES);
    $commentEncrypted = htmlspecialchars ($comment, ENT_QUOTES);

    $mySQL = "INSERT INTO registration
                       VALUES (NULL, '$name', '$surname', '$email', '$phone', '$comment'); "   ;
    $ifSuccess = mysqli_query( getPrisijungimas(),  $mySQL   );
    if ($ifSuccess == NULL) {
        echo "ERROR. registration was not successful, try again "
                . mysqli_error(  getPrisijungimas()  );
              }
            }


    function getEvent($nr){  //vienaskaita, nes ieskai vieno id informacijos;
      $mySQL = "SELECT * FROM events WHERE id = $nr";
      $results = mysqli_query ( getPrisijungimas(),  $mySQL);
                $resultsArray = mysqli_fetch_assoc($results);
                return $resultsArray;
            }






 ?>
