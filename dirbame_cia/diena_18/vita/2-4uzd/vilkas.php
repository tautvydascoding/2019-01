<?php
require_once("Gyvunai.php");


class Vilkas extends  Gyvunas {

  public $tipas = 'baisusis';

  public function printLigos() {
    return  $this->ligos;
  }

  //public function printPusryciai() {
  //return  $this->pusryciai;
  //}// neveiks

}


 ?>
