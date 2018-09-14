<?php
include_once '../controlador/DaoPerro.php';
$dao=new DaoPerro();
$id=$_GET["id"];
$resp=$dao->Eliminar($id);
echo "<script>
    alert('¡Registro eliminado!');
    window.location.href='listar.php';
    </script>";
