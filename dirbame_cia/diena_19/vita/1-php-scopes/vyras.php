<?php
require_once('zmogus.php');

class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function setTestosteronas($t){
       $this->testosteronas = $t;
    }

    function __construct($testosteronas){
    $this->testosteronas = $testosteronas;
    }

    function printTestosteronas(){
      echo $this->testosteronas;
    }

    function printVyroDuomenys(){
        echo $this->testosteronas;
          echo '<br>';
        echo $this->ugis;
          echo '<br>';
        echo $this->turtas;
          echo '<br>';
      //  echo $this->pusryciai;
    }
      public function printPusryciai222(){ //issaukiam tecio zmogaus funkcija
        $this->printPusryciai();
}
}


// UZDUOTIS 0.
// susikurti objekta VYRAS

// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki

// UZDUOTIS 2  (private-protected skirtumas)
// Vyras klases viduje atspausdinti:
// f-ja printVyroDuomenys()
// ugi, pusrycius, turtas
// kur gausite klaida? Kurio kintamojo neiseina atspausdinti?

// UZDUOTIS 3 (atspausdinti kintamaji, kurio neleido 2 uzdavinys)
// klases viduje (atspekite kurios) sukurti f-ja, kuri prieina prie privataus kintamojo . ir ji atspausdina
 ?>
