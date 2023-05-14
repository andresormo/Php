<?php
class Persona{
    private float $altura;
    private float $peso;
    private string $nombre;
    private float $imc;
    private string $estadoFisico;

    public function __construct(float $altura, float $peso, string $nombre)
    {
        $this->altura = $altura;
        $this->peso = $peso;
        $this->nombre =  $nombre;
        $this->imc = 0;
    }

    function calcularImc(){
        $this->imc = $this->peso/($this->altura**2);
    }

    function estadoFisico(){
        if($this->imc === 0.0){
            $this->calcularImc();
        }
        $this->estadoFisico = match(true){
            $this->imc < 18.5 => "Delgado",
            $this->imc >= 18.5 && $this->imc < 25 => "En la media",
            $this->imc >= 25 && $this->imc < 30 => "Sobrepeso",
            $this->imc > 30 => "Obesidad"
        };
        return $this->estadoFisico;
    }

}
