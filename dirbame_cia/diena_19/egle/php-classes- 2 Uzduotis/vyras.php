<?php

require_once('zmogus.php');

// UZDUOTIS 0.
// susikurti objekta VYRAS

class Vyras extends Zmogus {
    private $testosteronas = 6122;
    public function setTesto($x){
      $this->testosteronas = $x;
      }
      function printTestosteronas(){
      echo $this->testosteronas;
      }
      function getTestosteronas($x){
      return $this->testosteronas;
      }
      function printDuomenys(){
        echo $this->testosteronas ."<br />";
        echo $this->ugis ."<br />";
        echo $this->turtas ."<br />";
        // echo $ths->pusryciai;  privatus, jo nepaveldim

      }
      public function printPusryciai2(){
        $this->printPusryciai();
      }
}


// UZDUOTIS 1.
// susikurti f-jas kurios :
// 1. pakeicia 'testosterono' kieki
// 2. isveda 'testosrerono' kieki


 ?>
