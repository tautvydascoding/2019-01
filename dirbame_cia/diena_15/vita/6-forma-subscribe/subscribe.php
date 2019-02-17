<?php
//jei stalcius egzistuoja
if ( array_key_exists('ElPastas', $_GET) ){
  //as kazkas i stlciu ideta
  if (  $_GET['ElPastas'] == NULL ) {
      echo "stalcius neturi reiksmes ..";
      } else {
        echo "stalcius turi reiksme:" . $_GET['ElPastas'];
    }
    } else {
    echo "stalciaus tolkiu pavadinimu 'ElPastas' nera";
}


// AR "y" turi kokia nors reiksme










 ?>
