<!DOCTYPE html>
<?php
include_once '../controlador/conexion.php';
?>

<?php
session_start();
if(!isset($_SESSION["sesion"])){
    header("location:login_1.php");
}
else{
    $usuario=$_SESSION["sesion"];
}
?>

<html>
    <head >
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  

        <title></title>
    </head>

    <body>
        <script src="js/combo.js"></script>
        <script src="js/Telefono.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>

        <?php
        $cone = mysqli_connect("localhost", "root", "", "misperris");
        $reg = mysqli_query($cone, "select * from region");

        //con esto nos evitamos problemas con las ñ y las tildes
        $cone->set_charset('utf8');

        $resultadoRegiones = $cone->query("select * from region");
        $resultadoComunas = $cone->query("select * from ciudad");
        $resultadotipo_vivienda = $cone->query("select * from tipo_vivienda");
        $mensaje = "";
        ?>

        <header>
            <div class="Container">
                <div>
                    <?php
                    include_once'menu.php'
                    ?> 
                                
                      <?php
                    include_once'./menu_postu.php'
                    ?>   
                

                </div>
                </div>
        </header>

        <form method="POST" action="guardar_postulante.php">
            <table class="table">
                <thead>
                    <tr>
                        <th align="center">Formulario de registro de usuarios.</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>*Correo Electronico:</td>
                        <td>
                            <input type="email" name="txtCorreo" value="" placeholder="someone@gmail.com" required="true"/>
                        </td>
                    </tr>
                    <tr>
                        <td>*Run:</td>
                        <td>
                            <input type="text" id="rut" name="txtRut" value="" required="true" minlength="8" placeholder="Ej: 123456789" maxlength="11" />
                            <script src="js/rutina.jsjs"></script>
                        </td>
                    </tr>
                    <tr>
                        <td>*Nombre Completo:</td>
                        <td>
                            <input type="text" name="txtNombre" value="" placeholder="Full Name" required="true" />
                        </td>
                    </tr>
                    <tr>
                        <td>*Fecha de nacimiento:</td>
                        <td>
                            <input type="date" id="datepicker" name="txtFec" required="true" max="2000-12-31" />
                            
                        </td>
                    </tr>
                    <tr>
                        <td>*Teléfono de contacto:</td>
                        <td>
                            <input type="text" name="txtNumber" value="" required="true" placeholder="Ej: 123456789" minlength="9" maxlength="9" onKeyPress="if (event.keyCode < 48 || event.keyCode > 57)event.returnValue = false;""/>
                            <script src="js/Telefono.js"></script>
                        </td>
                    </tr>
                    <tr>
                        <td>*Región:</td>
                        <td>
                            <select name="cboRegion" id="cboRegion" required="true">
                                <option value="">Seleccionar</option>
                                <?php while ($fila = $resultadoRegiones->fetch_assoc()): ?>
                                    <option value="<?php echo $fila["id"]; ?>">
                                        <?php echo $fila["nombre"]; ?>
                                    </option>
                                <?php endwhile; ?>| 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>*Ciudad:</td>
                        <td>
                            <select name="cboCiudad" id="cboCiudad" required="true">
                                <option value="">Seleccionar</option>
                                <?php while ($fila = $resultadoComunas->fetch_assoc()): ?>
                                    <option value="<?php echo $fila["id"]; ?>">
                                        <?php echo $fila["nombre"]; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>

                        </td>                                
                        <td>

                    </tr>
                    <tr>
                        <td>*Tipo de vivienda:</td>
                        <td>
                            <select name="cboTipoViv" id="cboTipoViv" required="true"> 
                                <option value="">Seleccionar</option>
                                <?php while ($fila = $resultadotipo_vivienda->fetch_assoc()): ?>
                                    <option value="<?php echo $fila["id"]; ?>">
                                        <?php echo $fila["tipo"]; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
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