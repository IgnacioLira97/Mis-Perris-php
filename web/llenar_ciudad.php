<?php

$id_region=$_POST["id_region"];
$cone= mysqli_connect("localhost", "root", "","misperris" );
$cone->set_charset("utf8");
$reg= mysqli_query($cone, "select * from ciudad "
        ."where id_region=$id_region");

?>

<option value="0">Seleccione</option>
<?php

while ($row = mysqli_fetch_array($reg)) {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}

?>