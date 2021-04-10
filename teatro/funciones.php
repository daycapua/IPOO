<?php

class Funcion{
    private $nombre ;
    private $horaInicio = array() ;
    private $duracionObra ;
    private $precio ;

    public function __construct($nombre, $horaInicio, $duracionObra, $precio){
        $this->nombre = $nombre ;
        $this->horaInicio = array(
                                   "hora" => $horaInicio["hora"],
                                   "minutos" => $horaInicio["minutos"] ) ;
        $this->duracionObra -> $duracionObra ;
        $this->precio -> $precio ;
    }
    public function getNombre(){
        return $this->nombre ;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre ;
    }
    public function getHoraInicio(){
        return $this->horaInicio ;
    }
    public function setHoraInicio($horaInicio){
        $this->horaInicio = $horaInicio ;
    }
    public function getDuracionObra(){
        return $this->horaInicio ;
    }
    public function setDuracionObra($duracionObra){
        $this->duracionObra = $duracionObra ;
    }
    public function getPrecio(){
        return $this->precio ;
    }
    public function setPrecio($precio){
        $this->precio = $precio ;
    }
    public function cambiarFunciones($funciones){
        $this->setNombre($funciones["nombre"]) ;
        $this->setPrecio($funciones["precio"]) ;
    }
    public function misHorarios(){
        $hora = $this->getHoraInicio() ;
        echo $hora["hora"] . ":" . $hora["minutos"] ;
    }
    public function __toString(){
        $miHoras = $this->getHoraInicio();
        return "Nombre de la funcion: " . $this->getNombre() . "\n" . "Precio de la funcion: " . $this->getPrecio() . "\n" . "Hora de inicio de la funcion: " . $this->getHoraInicio() . "\n" . "Duracion de la funcion: " . $this->getDuracionObra() . " minutos" . "\n" ;
    }
}
