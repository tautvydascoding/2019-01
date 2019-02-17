<?php

require_once('inheritance.php');

class vilkas extends Gyvunas{
  public $tipas = "pilkas";
  public function getLigos(){
    return $this->ligos;
  }
  // public function getPusryciai(){
  //   return $this->pusryciai;
  // }
  public function getPusryciai(){
   return  $this->printPusryciai();
  }
};

$vilkas = new vilkas();

echo $vilkas->tipas. "<br />";
echo $vilkas->svoris. "<br />";
// echo $vilkas->ligos. "<br />";
// echo $vilkas->pusryciai . "<br />";

echo $vilkas->getLigos(). "<br />";
// echo $vilkas->getPusryciai() . "<br />";
echo $vilkas->getPusryciai(). "<br />";













 ?>
