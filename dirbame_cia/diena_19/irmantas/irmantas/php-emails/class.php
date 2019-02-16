<?php
// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'

class Gyvunas {
  public $svoris = 0;
  private $pusryciai = "nevalgo";
  protected $ligos = "neserga";
  public function printPusryciai() {
    return $this->pusryciai;
  }
}

// UZDUOTIS 1.1
// sukurti klase 'Vilkas' su kintamaisiais:
// public 'tipas'

class Vilkas extends Gyvunas{
  public $tipas = "neturi jokio tipo";
  public function printLigos() {
    return $this->ligos;
  }
  public function printPusryciai() {
    return $this->pusryciai;
  }
}

// UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // klaida
// pusryciai // klaida
// UZDUOTIS 3
// klaseje 'Vilkas' sukurti f-jas:
// public printLigos()
// public printPusryciai() // neveiks
// UZDUOTIS 4
// klaseje 'Gyvunas' sukurti f-jas:
// public printPusryciai()



// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

class Zmogus {
    public $ugis = 0;
    private $pusryciai = 'grikiai';
    protected $turtas = 'namas';
}


class Vyras  extends Zmogus {
    private $testosteronas = 6122;
    function setTestosteronas($value){
      $this->testosteronas = $value;
    }
    function getTestosteronas(){
      return $this->testosteronas;
    }
    function getTurtas(){
      return $this->turtas;
    }
    function printVyroDuomenys(){
      echo  "Vyro turtas: " . $this->turtas . " Testosteroinas: " . $this->testosteronas . " Vyro ugis " . $this->ugis . " O pusryciu nepaveldes nes Vyras yra Zmogaus klases vaikas, o pusryciai privatus zmogaus :)";
    }
}



//






















?>
