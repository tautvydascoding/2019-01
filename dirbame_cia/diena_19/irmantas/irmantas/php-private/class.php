<?php
//
// class A {
//   public $name = "bevardo";
//   private $plaukuSpalva = "Juoda";
//   protected $sirdiesYda = "Yra";
//   function getPlaukuSpalva(){
//     return $this->plaukuSpalva;
//   }
// }
//
//
//
//
// class B extends A {
//   function getYda(){
//     return $this->sirdiesYda;
//   }
//
// }
//
// $c = new B;
//
// print_r($c->name);
// echo "<br />";
// print_r($c->getYda());
// echo "<br />";
// print_r($c->getPlaukuSpalva());
//
//







class Zmogus {
  public $ugis = 1.5;
  protected $svoris = 50;
  private $pinigai = 1500;
  protected function getPinigai(){
    return $this->pinigai;
  }
}

class Moteris extends Zmogus {
  public $estrogenai = 3550;
  function getSvoris (){
    return $this->svoris;
  }
  function getMotersPinigai(){
    return $this->getPinigai();
}
}




class Vyras extends Zmogus {
  public $testosteronai = 8600;
  function getSvoris(){
  return $this->svoris;
  }
  function getVyroPinigai(){
    return $this->getPinigai();
}
}

$monika = new Moteris;
$tadas = new Vyras;

echo $monika->ugis . "<br>";
echo $monika->estrogenai . "<br>";
echo $monika->getSvoris() . "<br>";
echo $monika->getMotersPinigai() . "<br>";
echo "<br>";
echo $tadas->ugis . "<br>";
echo $tadas->testosteronai . "<br>";
echo $tadas->getSvoris() . "<br>";
echo $tadas->getVyroPinigai() . "<br>";








?>
