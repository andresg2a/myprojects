<?php

$id = $_GET['idtrabajador'];

$con = mysqli_connect("localhost", "root", "", "softcafe");
$sql = "DELETE FROM dt where idtrabajador like $id";
$rta = mysqli_query($con, $sql);

if (!$rta) {
    echo'<script type="text/javascript">
    alert("El trabajador no se elimino.");
    window.location.href="trabajadores.php";
    </script>';
}
else {
    echo'<script type="text/javascript">
    alert("¡Trabajador eliminado con exito!");
    window.location.href="trabajadores.php";
    </script>';
}

?>