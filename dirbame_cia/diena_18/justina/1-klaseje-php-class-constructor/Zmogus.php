<?php
// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
//* kintamojo paemimas f-je:    $this->vardas

class Zmogus
{
    private $ugis = 0;
    private $vardas = "bevardis";

    public function __construct($ugis, $vardas){
      $this->ugis = $ugis;
      $this->vardas = $vardas;
    }

    public function getUgis(){
      return $this->ugis; //$this islipa is funkcijos ir paima net ir private kintamaji $ugis
      echo "Einu einu jau einu";
    }
    public function getVardas(){
      return $this->vardas;
      echo "Einu einu jau einu";
    }
    public function setUgis($x){
      $this->ugis = $x;
      echo $x;
    }
    public function setVardas($x){
      $this->vardas = $x;
      echo $x;
    }
}


 ?>
