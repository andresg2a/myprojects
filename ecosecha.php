<?php

$id = $_GET['id_cosecha'];

$con = mysqli_connect("localhost", "root", "", "softcafe");
$sql = "DELETE FROM cosechas where id_cosecha like $id";
$rta = mysqli_query($con, $sql);

if (!$rta) {
    echo'<script type="text/javascript">
    alert("Error al eliminar el elemento.");
    window.location.href="cosechas.php";
    </script>';
}
else {
    echo'<script type="text/javascript">
    alert("Elemento eliminado con exito");
    window.location.href="cosechas.php";
    </script>';
}

?>