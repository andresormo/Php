<?php

require_once "Figura.php";

class Rectangulo extends Figura{
    public function __construct(
        protected int $base,
        protected int $altura
        )
    {}

    public function area(){
        return $this->base*$this->altura;
    }
}