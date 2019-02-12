<?php
include('db-functions.php');
  // $numeris = 4;
  // $gydytojas = getDoctor($numeris);
  // print_r($gydytojas);
  // echo  "<br>" . $gydytojas["name"] . "<br>" . $gydytojas['lastname'] ."<br>";
  // echo $gydytojas["name"] .  "<br>" . $gydytojas['lastname'] ;
  $kintamasis = $_GET["nr"];
  $gydytojas = getDoctor( $kintamasis);
  echo $gydytojas["id"] . " " . $gydytojas["name"] . " " . $gydytojas['lastname'] ;

 ?>
