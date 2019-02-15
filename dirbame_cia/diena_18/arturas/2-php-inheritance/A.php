<?php
  class A
  {
    public $name = "vardas";
    private $plaukuSpalva = "ruda";
    protected $sirdiesYda = "nepakankamumas";
    public function getPlaukuSpalva() {
      return $this->plaukuSpalva;
    }
  }
