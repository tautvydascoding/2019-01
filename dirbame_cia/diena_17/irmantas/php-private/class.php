<?php

/**
 *
 */
// class Zmogus {
//   private $ugis = 0;
//   private $vardas = "neturiu vardo";
//   public function getManoUgis(){
//     return $this->ugis;
//   }
//   public function getManoVardas(){
//     return $this->vardas;
//   }
//   public function setManoVardas($value){
//     $this->vardas = $value;
//   }
//   public function setManoUgis($value){
//     $this->ugis = $value;
//   }
// }

/**
 *
 */
class Zmogus {
  function __construct($height, $name){
    $this->ugis = $height;
    $this->vardas = $name;
  }
  public function getManoUgis(){
    return $this->ugis;
  }
  public function getManoVardas(){
    return $this->vardas;
  }
  public function setManoVardas($value){
    $this->vardas = $value;
  }
  public function setManoUgis($value){
    $this->ugis = $value;
  }
}




?>
