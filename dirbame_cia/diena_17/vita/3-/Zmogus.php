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

    public function getUgis() {
      return $this->ugis; }

    public function getVardas() {
      return $this->vardas; }


    public function setManoUgis($x) {
        $this->ugis = $x;  }

    public function setManoVardas($x) {
        $this->vardas = $x;   }

}


 ?>
