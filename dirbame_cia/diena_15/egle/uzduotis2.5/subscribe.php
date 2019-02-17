<?php

// echo "e-mail:  " . $_GET ['e-mail'] . "<br />";


if ( array_key_exists('e-mail', $_GET) ){
    //ar kas ideta i stalciu
    if ($_GET['e-mail'] != "") {
    echo "stalcius 'e-mail' egzistuoja:" . $_GET['e-mail'] .  "<hr />";
    echo "stalcius turi reiksme". $_GET['e-mail'] . "<hr />";
    }else{
      echo "stalcius reiksmes neturi". "<hr />";
    }
  }else{
    echo "stalciaus tokiu pavadinimu 'e-mail' nera";
  }






 ?>
