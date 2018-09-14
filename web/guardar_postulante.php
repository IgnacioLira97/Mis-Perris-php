<?php

include_once '../controlador/DaoPostulante.php';
include_once '../modelo/Postulante.php';

$errors = '';


$run=$_POST["txtRut"];
$nombre=$_POST["txtNombre"];
$correo=$_POST["txtCorreo"];
$fechaNac=$_POST["txtFec"];
$telefono=$_POST["txtNumber"];
//$region=$_POST["cboRegion"];//
$tipoViv=$_POST["cboTipoViv"];
$ciudad=$_POST["cboCiudad"];

if(empty($run)) 
{
    $errors .= "\n Por favor ingrese su RUT."; 
}

if(empty($nombre)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}

if(empty($correo)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}

if(empty($fechaNac)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}

if(empty($telefono)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}

if(empty($tipoViv)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}

if(empty($ciudad)) 
{
    $errors .= "\n Por favor ingrese su nombre."; 
}




$postulante=new Postulante();
$postulante->setRun($run);
$postulante->setNombre($nombre);
$postulante->setCorreo($correo);
$postulante->setFechaNac($fechaNac);
$postulante->setTelefono($telefono);
//$postulante->setRegion($region);
$postulante->setTipoViv($tipoViv);
$postulante->setCiudad($ciudad);

$dao=new DaoPostulante();
$filas_afectadas=$dao->Grabar($postulante);
if ($filas_afectadas>0) {
    echo "<script>
    alert('¡Postulante agregado!');
    window.location.href='ag_user.php';
    </script>";
} else {
    echo "<script>
    alert('¡No se agregó el postulante!');
    window.location.href='ag_user.php';
    </script>";
}