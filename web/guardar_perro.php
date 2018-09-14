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
    
    echo "<script>
    alert('¡El perro se ha guardado!');
    window.location.href='agregar.php';
    </script>";
} else {
    echo "<script>
    alert('¡No se ha podido guardar el perro!');
    window.location.href='agregar.php';
    </script>";
}