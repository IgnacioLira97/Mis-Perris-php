<?php

class Perro{
    private $id;
    private $nombre;
    private $raza;
    private $peso;
    private $edad;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getRaza() {
        return $this->raza;
    }

    function getPeso() {
        return $this->peso;
    }

    function getEdad() {
        return $this->edad;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }
}

    
