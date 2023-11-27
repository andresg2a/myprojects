<?php

$id = $_GET['id_cafetal'];

$con = mysqli_connect("localhost", "root", "", "softcafe");
$sql = "DELETE FROM cafetales where id_cafetal like $id";
$rta = mysqli_query($con, $sql);

if (!$rta) {
    echo'<script type="text/javascript">
    alert("Error al eliminar el elemento.");
    window.location.href="cafetales.php";
    </script>';
}
else {
    echo'<script type="text/javascript">
    alert("Elemento eliminado con exito");
    window.location.href="cafetales.php";
    </script>';
}

?>