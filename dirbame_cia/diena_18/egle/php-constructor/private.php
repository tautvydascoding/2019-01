<?php


/**
 *
 */
class Zmogus {
  private $ugis =0;
  private $vardas = "Bevardis";
  public function __construct( $vardas, $ugis){
    $this->ugis = $ugis;
    $this->vardas = $vardas;
  }
  public function getUgis(){
    return $this ->ugis;
  }
  public function getVardas(){
    return $this -> vardas;
  }
  public function setUgis($x){
    $this->ugis = $x;
  }

}




















 ?>
