<?php

include_once 'conexion.php';
include_once '../modelo/Cliente.php';

class DaoCliente{
    private $cone;
    
    function __construct() {
        try {
            $this->cone = new conexion();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

        public function Grabar($cliente) {
        try {
            $sql="insert into cliente values('@run','@corr','@nom','@fech','@tel', '@reg', '@ciu', '@tip')";
            $sql= str_replace("@run", $cliente->getRun(), $sql);
            $sql= str_replace("@corr", $cliente->getCorreo(), $sql);
            $sql= str_replace("@nom", $cliente->getNombre_completo(), $sql);
            $sql= str_replace("@fech", $cliente->getFecha_nacimiento(), $sql);
            $sql= str_replace("@tel", $cliente->getTelefono(), $sql);
            $sql= str_replace("@reg", $cliente->getRegion(), $sql);
            $sql= str_replace("@ciu", $cliente->getCiudad(), $sql);
            $sql= str_replace("@tip", $cliente->getTipo_vivienda(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
    
    public function Listar(){
        try {
            $sql="select * from cliente";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
    public function Eliminar($run){
        try {
            $sql= "DELETE FROM cliente WHERE run='$run'";
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
    public function Buscar($run){
        try {
            $sql= "select * from cliente where run='$run'";
            return $this->cone->SqlSeleccion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
        
        public function Modificar($cliente) {
        try {
            $sql="update cliente set correo='@corr',"
                    ."nombre_completo='@nom',fecha_nacimiento='@fech'"
                    .",telefono='@tel', region='@reg', ciudad='@ciu',"
                    ." tipo_vivienda='@tip' where run='@run'";
            $sql= str_replace("@run", $cliente->getRun(), $sql);
            $sql= str_replace("@corr", $cliente->getCorreo(), $sql);
            $sql= str_replace("@nom", $cliente->getNombre_completo(), $sql);
            $sql= str_replace("@fech", $cliente->getFecha_nacimiento(), $sql);
            $sql= str_replace("@tel", $cliente->getTelefono(), $sql);
            $sql= str_replace("@reg", $cliente->getRegion(), $sql);
            $sql= str_replace("@ciu", $cliente->getCiudad(), $sql);
            $sql= str_replace("@tip", $cliente->getTipo_vivienda(), $sql);
            return $this->cone->SqlOperacion($sql);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }
}
