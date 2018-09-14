
<html>
    <head>
        <meta charset="UTF-8">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
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
                    include_once'menu_perros.php'
                    ?>  


                </div>
            </div>
        </header>

        <h1>Listado de Perros</h1>



        <table>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Raza</td>
                <td>Peso</td>
                <td>Edad</td>
                <td>Eliminar</td>
                <td>Modificar</td>

            </tr>

            <?php
            include_once '../controlador/DaoPerro.php';
            $dao = new DaoPerro();
            $reg = $dao->Listar();
            while ($row = mysqli_fetch_array($reg)) {
                echo '<tr>';
                echo '<td>' . $row[0] . "</td>";
                echo '<td>' . $row[1] . "</td>";
                echo '<td>' . $row[2] . "</td>";
                echo '<td>' . $row[3] . "</td>";
                echo '<td>' . $row[4] . "</td>";
                echo '<td><a href="eliminar.php?id=' . $row[0] . '"> Eliminar </a></td>';
                echo '<td><a href="modificar.php?id=' . $row[0] . '"> Modificar </a></td>';
                echo '</tr>';
            }
            ?>
        </table>

    </body>
</html>

