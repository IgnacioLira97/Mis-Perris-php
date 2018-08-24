<?php
include_once '../controlador/DaoPerro.php';
$dao=new DaoPerro();
$id=$_GET["id"];
$resp=$dao->Eliminar($id);

header("location:listar.php");