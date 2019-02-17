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

    return $results; // mysqli tipo OBJEKTAS - NE masyvas
}


// function getEventList(){
$allEvents= getEvents();
//             // mysqli_fetch_assoc- is visu events paimama viena eilute ir paverciama i ARRAY
// $event =  mysqli_fetch_assoc( $allEvents );
// while ( $event != NULL ) { // ar turim events duomenu
//     // print_r(  $event  );
//     // echo "<hr />";
//
//     echo "<ul> <li> <h4>" .
//       $event['name'] . "</h4> </li> <br />" . "On ".
//
//       $event['date'] . "at ".   $event['time']  . " o'clock <br />".
//
//       $event['description'] . "<br />" .
//
//       "price: " . $event['price']. "$ </ul>";
//
//       $event =  mysqli_fetch_assoc( $allEvents   ); // ima VIS SEKANTI event is objekto
//     }

  // }
  // echo getEventList();









 ?>
