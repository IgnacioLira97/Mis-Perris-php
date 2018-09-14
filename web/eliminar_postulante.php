<?php

include_once '../controlador/DaoPostulante.php';
$dao=new DaoPostulante();
$run=$_GET["run"];
$resp=$dao->Eliminar($run);
//redireccionar
echo "<script>
    alert('¡Postulante eliminado!');
    window.location.href='Listar_postulante.php';
    </script>";
