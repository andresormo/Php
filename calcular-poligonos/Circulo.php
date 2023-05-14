<?php

require_once "Figura.php";

class Circulo extends Figura{
    
    public function __construct(
        protected int $radio
    )
    {}

    public function area(){
      return pi()*$this->radio**2;
    }
}