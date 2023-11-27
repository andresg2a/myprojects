<?php

$id = $_GET['id_ing'];

$con = mysqli_connect("localhost", "root", "", "softcafe");
$sql = "DELETE FROM ingresos where id_ing like $id";
$rta = mysqli_query($con, $sql);

if (!$rta) {
    echo'<script type="text/javascript">
    alert("Error al eliminar el elemento.");
    window.location.href="ingresos.php";
    </script>';
}
else {
    echo'<script type="text/javascript">
    alert("Elemento eliminado con exito");
    window.location.href="ingresos.php";
    </script>';
}

?>