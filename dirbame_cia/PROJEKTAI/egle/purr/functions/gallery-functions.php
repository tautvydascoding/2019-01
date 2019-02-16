<?php

// Connection to Database:
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
//-------------Functions-------------------------------------

// 1. GET CAT
function getCat($catNo = 9999){
  $mySQL = "SELECT * FROM cats WHERE id = $nr";
  $results = mysqli_query(getPrisijungimas(), $mySQL);
  $resultsArray = mysqli_fetch_assoc($results);
  return $resultsArray;
};

// $firstCat = getCat(1)


// 2. CREATE CAT
function createCat($name, $description, $age, $photo) {
    $mySQL = "INSERT INTO cats
                       VALUES (NULL, '$name', '$description', '$age', ''$photo') "   ;
    $ifSuccess = mysqli_query( getPrisijungimas(),  $mySQL   );
    if ($ifSuccess == NULL) {
        echo "ERROR: a new cat was not added ". " "
                . mysqli_error(  getPrisijungimas()  ); // mysqli_error - is DB paima klaida
    }
};

// createCat ();

// 3. DELETE CAT
function deleteCat($nr) {
    $mySQL = "DELETE FROM cats WHERE id = '$nr'   LIMIT 1 ";
    $ifSuccess = mysqli_query( getPrisijungimas(),  $mySQL   );
    if ($ifSuccess == NULL) {
        echo "ERROR. Cat was not deleted: . " . mysqli_error(  getPrisijungimas()  );
        // mysqli_error - is DB paima klaida
    }
};
// deleteCat(4);

// 4. UPDATE CAT INFO
function updateCat($nr, $name, $description, $age, $photo) {
    $manoSQL = "UPDATE cats SET  name = '$name',
                                 description = '$description',
                                 age = '$age',
                                 photo = '$photo'
                               WHERE id = '$nr'
                               LIMIT 1
               ";
   $ifSuccess = mysqli_query( getPrisijungimas(),  $mySQL   );
   if ($ifSuccess == NULL) {
       echo "ERROR. cat $nr  info was not updated " . mysqli_error(  getPrisijungimas()  );
       // mysqli_error - is DB paima klaida
   }
}
// updatecat(2, "snowflake", "blahblah blah", "5", "4.jpg");


// 5. GET WHOLE ARRAY
function getCats($allCats = 99999){
  $mySQL = "SELECT * FROM cats
                    ORDER BY id DESC
                    LIMIT $allCats";
  $results = mysqli_query (getPrisijungimas(),    $mySQL);
  return $results;
};
//
  $allCats = getCats();
  $cat = mysqli_fetch_assoc( $allCats );
  while ($cat != NULL) {                 // are there any cat info
  // print_r($cat);
  // echo "<hr />";
  $cat = mysqli_fetch_assoc($allCats);   //takes one cat after another;
}



echo $cat['name']






?>
