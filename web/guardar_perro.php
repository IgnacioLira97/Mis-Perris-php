<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$id=$_POST["txtId"];
$nombre=$_POST["txtNombre"];
$raza=$_POST["txtRaza"];
$peso=$_POST["txtPeso"];
$edad=$_POST["txtEdad"];

$perro=new Perro();
$perro->setId($id);
$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setPeso($peso);
$perro->setEdad($edad);

$dao=new DaoPerro();
$filas_afectadas=$dao->Grabar($perro);
if ($filas_afectadas>0) {
    echo 'Perro registrado';
} else {
    echo 'Error al registrar el perro';
}