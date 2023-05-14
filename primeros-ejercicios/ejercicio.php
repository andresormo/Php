<?php
$numero = $_GET['numero'];
$potencia = 1;

while ($numero ** $potencia <= 10000) {
    $potencia++;
};

echo  $potencia;
