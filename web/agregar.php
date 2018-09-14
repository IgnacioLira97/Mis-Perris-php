<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["sesion"])){
    header("location:login_1.php");
}
else{
    $usuario=$_SESSION["sesion"];
}
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
        <title></title>
    </head>

    <body>


        <header>
            <div class="Container">
                <div>
                    <?php
                    include_once'menu.php'
                    ?> 
                      <?php
                    include_once'menu_perros.php'
                    ?>  
                                
 

                </div>
                </div>
        </header>

        <form method="POST" action="guardar_perro.php">
            <table class="table">
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de Perros</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Id:</td>
                        <td>
                            <input type="text" name="txtId" value="" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" placeholder="Ingrese el Nombre" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza" placeholder="Ej: Beagle" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Peso:</td>
                        <td>
                            <input type="number" name="txtPeso" placeholder="Ingrese Peso" value="" /> kg
                        </td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td>
                            <input type="number" name="txtEdad" placeholder="Ingrese el Edad" min="1" max="30" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Agregar" />
                            <input type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>


