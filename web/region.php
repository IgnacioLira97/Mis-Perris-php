<?php
//paso 1: recibir el id de la region

$id = $_GET["id"];

//paso 2: conectarnos a la bbdd a buscar las comunas

$cone= mysqli_connect("localhost", "root", "", "misperris");

$cone->set_charset("utf8"); //utf8 para que acepte ñ y otros signos

$sql = "select * from ciudad where region_id = $id";

$resultado = $cone->query($sql);

//paso 3: enviar las comunas que corresponden


?>

<option value="">Seleccionar</option>
 <?php while($fila = $resultado->fetch_assoc()): ?>
 <option value="<?php echo $fila["id"];?>">
    <?php echo $fila["nombre"]; ?>
 </option>
 <?php endwhile; ?>