<?php

require_once "Figura.php";

class Cuadrado extends Figura{
    
    public function __construct(
        protected int $lado
    )
    {}

    public function area(){
      return $this->lado*$this->lado;
    }
}