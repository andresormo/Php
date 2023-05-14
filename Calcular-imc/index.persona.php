<?php
require_once "Persona.php";

$persona = new Persona(1.75, 76.5, "Andres");

echo $persona->estadoFisico();