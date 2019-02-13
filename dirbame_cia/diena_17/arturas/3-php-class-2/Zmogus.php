<?php
  class Zmogus
  {
    private $ugis = 0;
    private $vardas = "";
    public function getManoUgis() {
      return $this->ugis;
    }
    public function getManoVardas() {
      return $this->vardas;
    }
    public function setManoUgis($x) {
      $this->ugis = $x;
    }
    public function setManoVardas($x) {
      $this->vardas = $x;
    }

    function __construct($vardas, $ugis)
    {
      $this->vardas = $vardas;
      $this->ugis = $ugis;
    }
  }
