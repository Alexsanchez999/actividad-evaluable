<?php
class Lamp {
   public $idlampara;
   public $nombre;
   public $encendido;
   public $modelo;
   public $potencia;
  public $zona;

  public function __construct($idlampara, $nombre, $encendido, $modelo, $potencia, $zona){
   $this->idlampara = $idlampara;
   $this->nombre = $nombre;
   $this->encendido = $encendido;
   $this->modelo = $modelo;
   $this->potencia = $potencia;
   $this->zona = $zona;
}
public function getID(){
    return $this->idlampara;
}
public function getnombre(){
    return $this->nombre;
}
public function getencendido(){
    return $this->encendido;
}
public function getmodelo(){
    return $this->modelo;
}
public function getpotencia(){
    return $this->idpotencia;
}
public function getzona(){
    return $this->zona;
}
}