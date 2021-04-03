<?php
include "teatro.php" ;

miTeatro() ;
function miTeatro(){

    $false = "false";
    $true = "true";
    $teatro = new Teatro("Primer Nombre Teatro", "Primera Direccion");

    
    echo "Cargo la primera funcion: " . (($teatro->cambiarFuncion(0, "Cuadrilatero", 100)) ? $true : $false) . "\n" ;
    echo "Cargo la segunda funcion: " . (($teatro->cambiarFuncion(1, "La vida es sueño", 250)) ? $true : $false) . "\n";
    echo "Cargo la tercera funcion: " . (($teatro->cambiarFuncion(2, "La Celestina", 350)) ? $true : $false) . "\n";
    echo "Cargo la cuarta funcion: " . (($teatro->cambiarFuncion(3, "Don Juan Tenorio", 400)) ? $true : $false) . "\n\n";

    echo $teatro;

    $teatro->setNombre("La caja magica");

    $teatro->setDireccion("mengelle 250");

    echo "Cambio de funciones: \n" . $teatro . "\n"."\n";

    echo "Funcion no cargada: " . ((-1 != $teatro->existeFuncion("El enfermo imaginario")) ? $true : $false) . "\n";
    $indice = $teatro->existeFuncion("Cuafrilatero");
    echo "funcion ya cargada: " . ((-1 != $indice) ? $true : $false) . "\n";

    echo "cambio de funcion: " . (($teatro->cambiarFuncion($indice, "El enfermo imaginario", 450)) ? $true : $false) . "\n\n";

    echo $teatro;

    echo "Cambia el precio por una funcion no cargada: " . (($teatro->cambiarPrecio(4, 200)) ? $true : $false) . "\n";
    echo "Cambia el precio de una function cargada: " . (($teatro->cambiarPrecio(0, 300)) ? $true : $false) . "\n\n";

    echo $teatro ;
}