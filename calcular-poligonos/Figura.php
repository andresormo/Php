<?php

abstract class Figura{
    
    protected $poligono;
    public function getPoligono(){
        return $this->poligono;
    }
    
    public abstract function area();
}