<?php
include 'Funciones.php';

$nombre = "Daiana";
$horaI = array("hora"=>18, "minutos"=>00) ; 
$duracion = 120 ;
$precio = 1200 ;

$funcion = new Funcion($nombre, $hora, $duracion, $precio);

echo $funcion;
