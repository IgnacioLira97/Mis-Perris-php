<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function(event){
                $("#cboRegion").change(function(){
                    var id_region=$('#cboRegion').val();
                    $.ajax({
                        url:"llenar_ciudad.php",
                        type:'POST',
                        data:{id_region:id_region},
                        success:function(data){
                            $("#cboCiudad").html(data);
                        }
                    })
                });
            });
        </script>
        
        <?php
        $cone = mysqli_connect("localhost","root", "", "misperris");
        $reg= mysqli_query( $cone,"select * from region");
        $reg1= mysqli_query( $cone,"select * from tipo_vivienda");
        ?>
        
        <?php include_once './menu_cliente.php'; ?>
        <form method="POST" action="guardar_cliente.php">
            
            
            <table class="tableRegistrar" border="1">
                
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de Clientes</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rut:</td>
                        <td>
                            <input type="text" name="txtRun" value="" placeholder="rut sin puntos y con güion" required/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Correo:</td>
                        <td>
                            <input type="text" name="txtCorreo" value=""  required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre Completo:</td>
                        <td>
                            <input type="text" name="txtNombre" value="" placeholder="Nombre Apellido" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento:</td>
                        <td>
                            <input type="datetime" name="txtFecha" value="" placeholder="año-mes-día" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>
                            <input type="text" name="txtTelefono" value=""  required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Region:</td>
                        <td>
                            <select name="cboRegion" id="cboRegion" required>
                                <?php
                                while ($row=mysqli_fetch_array($reg)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }

                                  ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Ciudades:</td>
                        <td>
                            <select name="cboCiudad" id="cboCiudad" required></select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipo de Vivienda:</td>
                        <td>
                            <select name="cboTipo" id="cboTipo" required>
                                <?php
                                while ($row=mysqli_fetch_array($reg1)) {
                                echo '<option value="'.$row[0].'">'.$row[1].'</option>';
                                }

                                  ?>  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="w3-input" type="submit" value="Enviar" onclick="formulario()" />
                            <input class="w3-input" type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
        <script src="js/rutinas.js"></script>
    </body>
</html>
