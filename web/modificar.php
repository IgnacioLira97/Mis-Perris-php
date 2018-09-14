<!DOCTYPE html>
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
        
          <?php
            include_once'../controlador/DaoPerro.php';
          $dao=new DaoPerro();
          $id=$_GET["id"];
          $reg=$dao->Buscar($id);
          $fila= mysqli_fetch_row($reg);
           ?>
        <div>    <form method="POST" action="modificar_perro.php">
                <table class="table">
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de perros</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td>
                            <input type="text" name="txtid" value="<?php echo $fila[0]?>" /> 
                        </td>
                    </tr>
                    <tr>
                        <td>NOMBRE:</td>
                        <td>
                            <input type="text" name="txtnombre" value="<?php echo $fila[1]?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>RAZA:</td>
                        <td>
                            <input type="text" name="txtraza" value="<?php echo $fila[2]?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>PESO:</td>
                        <td>
                            <input type="text" name="txtpeso" value="<?php echo $fila[3]?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>EDAD:</td>
                        <td>
                            <input type="number" name="txtedad" value="<?php echo $fila[4]?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Enviar" />
                            <input type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
