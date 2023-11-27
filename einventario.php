<?php

$id = $_GET['id_inv'];

$con = mysqli_connect("localhost", "root", "", "softcafe");
$sql = "DELETE FROM inventario where id_inv like $id";
$rta = mysqli_query($con, $sql);

if (!$rta) {
    echo'<script type="text/javascript">
    alert("Error al eliminar el elemento.");
    window.location.href="inventario.php";
    </script>';
}
else {
    echo'<script type="text/javascript">
    alert("Elemento eliminado con exito");
    window.location.href="inventario.php";
    </script>';
}

?>