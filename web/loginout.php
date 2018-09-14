<?php

session_start();
unset($_SESSION["sesion"]);
echo "<script>
    alert('Sesión cerrada exitosamente');
    window.location.href='servicios.php';
    </script>";
//header("location:servicios.php");


