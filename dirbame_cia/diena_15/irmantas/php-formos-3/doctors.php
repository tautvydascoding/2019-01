<?php
include('db-functions.php');
  // $numeris = 4;
  // $gydytojas = getDoctor($numeris);
  // print_r($gydytojas);
  // echo  "<br>" . $gydytojas["name"] . "<br>" . $gydytojas['lastname'] ."<br>";
  // echo $gydytojas["name"] .  "<br>" . $gydytojas['lastname'] ;



  $numeris = $_GET['nr'];
  $gydytojas = getDoctor( $numeris);
  echo $gydytojas["name"] . " " . $gydytojas['lastname'] ;

 ?>
