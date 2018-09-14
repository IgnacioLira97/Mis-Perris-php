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
        <?php include_once './menu.php'; ?>
        <form method="POST" action="guardar_perro.php">
            
            
            <table class="tableIngresar" border="1">
                
                <thead>
                    <tr>
                        <th>Formulario de Ingreso de Perros</th>                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Id:</td>
                        <td>
                            <input type="text" name="txtId" value="" placeholder="ingrese id ej:1" required/> 
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="txtNombre" value="" placeholder="ej: Sofia" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Raza:</td>
                        <td>
                            <input type="text" name="txtRaza" value="" placeholder="ej: Labrador" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Tamaño:</td>
                        <td>
                            <input type="number" min="0" max="150" name="txtTamano" value="" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>Color:</td>
                        <td>
                            <input type="text" name="txtColor" value="" placeholder="ej: tricolor" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input class="w3-input" type="submit" value="Enviar" />
                            <input class="w3-input" type="reset" value="Limpiar" />
                        </td>                        
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>