<?php

$cadena=["patata", "cebolla","externocleidomastoideo","y", "sal", "pimienta", "te","agua"];
$palabraMasLarga= $cadena[0];
$palabraMasCorta=$cadena[0];

foreach($cadena as $palabra){
    if(strlen($palabra)> strlen($palabraMasLarga)){
        $palabraMasLarga=$palabra;
    } else if(strlen($palabra)< strlen($palabraMasCorta)){
        $palabraMasCorta=$palabra;
    };
};


echo "La palabra más larga es $palabraMasLarga y la más corta es $palabraMasCorta";