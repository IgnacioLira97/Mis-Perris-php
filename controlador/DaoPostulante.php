<?php

include_once 'conexion.php';
include_once '../modelo/Postulante.php';

class DaoPostulante{
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    public function Grabar($postulante) {
        try {
            $sql="insert into postulante values('@ru','@no','@co','@fe','@te','@vi','@ci')";
            $sql= str_replace("@ru", $postulante->getRun(), $sql);
            $sql= str_replace("@no", $postulante->getNombre(), $sql);
            $sql= str_replace("@co", $postulante->getCorreo(), $sql);
            $sql= str_replace("@fe", $postulante->getFechaNac(), $sql);
            $sql= str_replace("@te", $postulante->getTelefono(), $sql);
            $sql= str_replace("@vi", $postulante->getTipoViv(), $sql);
            $sql= str_replace("@ci", $postulante->getCiudad(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Listar(){
        try {
            $sql="select * from postulante";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
        
    public function Eliminar($run){
        try {
            $sql= "delete from postulante where run='$run'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
        
    public function Buscar($run) {
        try {
            $sql = "select * from auto where patente='$run'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function Modificar($postulante) {
        try {
            $sql="update postulante set run='@ru', nombre='@no', correo='@co', fecha_nac='@fe', telefono='@te', tipo_vivienda_id='@ti', ciudad='@ci' where run='@ru'";
            $sql= str_replace("@ru", $postulante->getRun(), $sql);
            $sql= str_replace("@no", $postulante->getNombre(), $sql);
            $sql= str_replace("@co", $postulante->getCorreo(), $sql);
            $sql= str_replace("@fe", $postulante->getFechaNac(), $sql);
            $sql= str_replace("@te", $postulante->getTelefono(), $sql);
            $sql= str_replace("@ti", $postulante->getTipoViv(), $sql);
            $sql= str_replace("@ci", $postulante->getCiudad(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
    
    
}

