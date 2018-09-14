<?php

class Cliente {
    private $correo;
    private $run;
    private $nombre_completo;
    private $fecha_nacimiento;
    private $telefono;
    private $region;
    private $ciudad;
    private $tipo_vivienda;
    //private $id_vivienda;
    //private $id_ciudad;
    //private $id_region;
    
    function __construct() {
        
    }

    function getCorreo() {
        return $this->correo;
    }

    function getRun() {
        return $this->run;
    }

    function getNombre_completo() {
        return $this->nombre_completo;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getRegion() {
        return $this->region;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getTipo_vivienda() {
        return $this->tipo_vivienda;
    }
    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setRun($run) {
        $this->run = $run;
    }

    function setNombre_completo($nombre_completo) {
        $this->nombre_completo = $nombre_completo;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setTipo_vivienda($tipo_vivienda) {
        $this->tipo_vivienda = $tipo_vivienda;
    }
    /*
    function getId_vivienda() {
        return $this->id_vivienda;
    }

    function getId_ciudad() {
        return $this->id_ciudad;
    }

    function getId_region() {
        return $this->id_region;
    }
    function setId_vivienda($id_vivienda) {
        $this->id_vivienda = $id_vivienda;
    }

    function setId_ciudad($id_ciudad) {
        $this->id_ciudad = $id_ciudad;
    }

    function setId_region($id_region) {
        $this->id_region = $id_region;
    }

*/




}
