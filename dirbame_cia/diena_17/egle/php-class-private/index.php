<?php

include('private.php');

// $Monika = new Zmogus();
// echo $Monika -> ugis; //error cannot accesss private property nes sukurta, kaip private object.

$Monika = new Zmogus();
echo $Monika -> getUgis() . "<br />";

echo $Monika -> getVardas() . "<br />";


$Monika->setUgis(180);
echo "Ugis: " . $Monika->getUgis() . "cm" . "<br />";












 ?>
