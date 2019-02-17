<<?php
require_once ('Zmogus.php');


class Vyras  extends Zmogus {
    private $testosteronas = 6122;

    public function getTestostKiekis(){  //get su return
      return $this->testosteronas;
    }

    public function setTestostKiekis($t){ //set visada laukia kintamojo, t.b. uzpildyti skliaustai
      $this->testosteronas = $t;
    }

    public function printTestostKiekis(){ //print komanta spausdina
      echo $this->testosteronas;
    }

    public function printVyroDuomenys(){
      echo $this->testosteronas . "<br />";
      echo $this->ugis . "<br />";
      echo $this->turtas . "<br />";
      //echo $this->pusryciai . "<br />";  //pusryciu neleidzia atspausdint, meta error, nes privatus zmogaus klaseje ir ju nepaveldeja
    }

    public function printPusryciai(){
      $this->printPusryciaix();
    }
}



?>
