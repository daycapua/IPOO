<?php

    class Teatro {
    private $funcionTeatro ;
    private $nombre ;
    private $direccion ;

    public function __construct($nombre, $direccion){
        $this->nombre = $nombre ;
        $this->direccion = $direccion ;
        $this->funcionTeatro = [
            ["nombre" => "", "precio" => 0] ,
            ["nombre" => "", "precio" => 0] ,
            ["nombre" => "", "precio" => 0] ,
            ["nombre" => "", "precio" => 0] , ] ;
    }

    public function getNombre(){
        return $this->nombre ;
    }

    public function getDireccion(){
        return $this->direccion ;
    }

    public function getFunciones(){
        return $this->funcionTeatro ;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre ;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion ;
    }
    public function existeFuncion($funcionBuscada){
        $indice = -1 ;
        $i = 0 ;
        while ($i < count($this->funcionTeatro) && $indice == -1 ) {
            if ($this->funcionTeatro[$i]["nombre"] == $funcionBuscada) {
                $indice = $i ;
            } else {
                $i++ ;
            }
        }
        return $indice ;
    }

    public function cambiarFuncion($indice, $nuevoNombre, $nuevoPrecio){
        if ($indice < 4 && $indice >= 0 ) {
            $this->funcionTeatro[$indice]["nombre"] = $nuevoNombre ;
            $this->funcionTeatro[$indice]["precio"] = $nuevoPrecio ;
            $correcto = true ;
        } else {
            $correcto = false ;
        }
        return $correcto ;
    }

    public function cambiarPrecio($indice, $nuevoPrecio){
        if ($indice < 4 && $indice >= 0) {
            $this->funcionTeatro[$indice]["precio"] = $nuevoPrecio ;
            $correcto = true ;
        } else {
            $correcto = false ;
        }
        return $correcto ;
    }
    public function __toString()
    {
        return "Teatro: " . $this->getNombre() . "\n" . "Direccion: " . $this->getDireccion() . "\n\n" . $this->arrayToString() . "\n";
    }
    private function arrayToString(){
        $i = 1 ;
        $resp = "" ;
        $misFunciones = $this->getFunciones() ;
        for ($i = 0; $i < count($misFunciones) ; $i++) {
            $funcion = $misFunciones[$i]["nombre"];
            $precio = $misFunciones[$i]["precio"];
            $resp .= "Funcion " . ($i + 1) . ": \n mi obra: $funcion\n Precio: $precio \n" ;
            $resp .= "-------------------------------------------------\n";
        }
        return $resp ;
    }
}