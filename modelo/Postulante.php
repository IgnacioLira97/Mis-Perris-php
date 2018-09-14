<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Carlos Javier Cartes
 */
class Postulante{
    
    private $correo;
    private $run;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $ciudad;
    private $tipoViv;
    
    function __construct() {
        
    }
    
    function getCorreo() {
        return $this->correo;
    }

    function getRun() {
        return $this->run;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getFechaNac() {
        return $this->fechaNac;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getTipoViv() {
        return $this->tipoViv;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setRun($run) {
        $this->run = $run;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setTipoViv($tipoViv) {
        $this->tipoViv = $tipoViv;
    } 
}
