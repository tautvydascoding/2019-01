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

//
// function getCat($no){
//   $mySQL = "SELECT * FROM cats WHERE id = $no";
//
//   $results = mysqli_query (getPrisijungimas(), $ySQL);
//
//   $results_array = mysqli_fetch_assoc($results);
//
//   return $results_array;
// };
//
// print_r (getCat(1)); //<-- test if aray works
//
//
// // ----------Prints out  selected array
// function getCats($allCats = 99999){
//   $mySQL = "SELECT * FROM cats
//                     ORDER BY id DESC
//                     LIMIT $allCats
//   ";
//   mysqli_query();
//   return $results;
// };
//
// // ------- Prints out all arrays:
// $allCats = getCats();
// $cat = mysqli_fetch_assoc($allCats);
//
// while ($cat != NULL){
//   Print_r($cat);
//   echo "<hr />";
//   $cat =mysqli_fetch_assoc($allCats);
// }
//
// //------------  Print photos: ----------
function getCatImg($no){
  $mySQL = "SELECT photo FROM cats WHERE id = $no"; //string
  $results = mysqli_query( getPrisijungimas(), $mySQL); // grazina objeka is db
  $resultsArray = mysqli_fetch_assoc($results); //pavercia mysql 1 objekta i masyva
  return $resultsArray;
};


$catImg = getCatImg(1);
// print_r($catImg);
// echo $catImg['photo']; // <-- add to gallery.php
// $catImg = getCatImg($no);


function getCatInfo($no){
  $mySQL = "SELECT * FROM cats WHERE id = $no";
  $results = mysqli_query( getPrisijungimas(), $mySQL);
  $resultsArray = mysqli_fetch_assoc($results);
  return $resultsArray;

}

$catInfo = getCatInfo(1);
// print_r ($catInfo['name']);
//
// echo $catInfo['name'];



















 ?>
