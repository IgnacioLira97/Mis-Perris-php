<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body class="jonny">
        
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
        <h1>Listado de Postulantes</h1>
        
        <table class="table">
            <tr>
                <td>RUN</td>
                <td>NOMBRE</td>
                <td>CORREO</td>
                <td>FECHA NACIMIENTO</td>
                <td>TELEFONO</td>
                <td>TIPO VIVIENDA</td>
                <td>ID CIUDAD</td>
            </tr>
            <?php
                include_once '../controlador/DaoPostulante.php';
                $dao=new DaoPostulante();
                $reg=$dao->Listar();
                while ($row = mysqli_fetch_array($reg)) {
                    echo '<tr>';
                    echo '<td>'.$row[0]."</td>";
                    echo '<td>'.$row[1]."</td>";
                    echo '<td>'.$row[2]."</td>";
                    echo '<td>'.$row[3]."</td>";
                    echo '<td>'.$row[4]."</td>";
                    echo '<td>'.$row[5]."</td>";
                    echo '<td>'.$row[6]."</td>";
                    echo '<td><a href="eliminar_postulante.php?run='.$row[0].'"> Eliminar </a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
        
    </body>
</html>