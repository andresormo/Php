<?php
require_once "Cuadrado.php";
require_once "Rectangulo.php";
require_once "Circulo.php";
$cuadrado = new Cuadrado(5);

$rectangulo = new Rectangulo(20, 7);

$circulo = new Circulo(10);

echo $cuadrado->area(),"<br/>";
echo $rectangulo->area(),"<br/>";
echo $circulo->area(),"<br/>";