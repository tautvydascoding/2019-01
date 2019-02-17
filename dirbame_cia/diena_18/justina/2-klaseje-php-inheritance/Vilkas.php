<?php
// UZDUOTIS 1.0:
// sukurti klase 'Gyvunas' su kintamaisiais:
// public 'svoris', private 'pusryciai', protected 'ligos'

// UZDUOTIS 1.1
// sukurti klase 'Vilkas' su kintamaisiais:
// public 'tipas'

// UZDUOTIS 1.2
// klase 'Vilkas' paveldi klase 'Gyvunas'
require_once ('Gyvunas.php');


class Vilkas extends Gyvunas
{
    public $tipas = "kazkoks tipas";
    // UZDUOTIS 3
    // klaseje 'Vilkas' sukurti f-jas:
    // public printLigos()
    // public printPusryciai() // neveiks

    public function printLigos(){
      return $this->ligos;
      echo $ligos;
    }

    // public function printPusryciai(){
    //   return $this->pusryciai;
    //   echo $pusryciai;
    // }
    //jei f-ja printPusryciai susikuriame Vilke, ji neveiks index faile, nes pusryciu kintamasis yra Gyvuno faile ir jis yra private. Todel jis veikia tik gyvuno klaseje. Jei norim, kad f-ja veiktu index faile, reik funkcija public printPusryciai kurtis Gyvuno faile, ja paveldes Vilkas ir tada ispausdins indexe. Jei Gyvune f-ja butu private, ja paveldes Vilkas, bes veiks tik Vilke ir nenukeliaus i index. Jei printPusryciai protected Gyvune, tai veiks ir Vilke, ir indexe.

  }






// UZDUOTIS 4
// klaseje 'Gyvunas' sukurti f-jas:
// public printPusryciai()




 ?>
