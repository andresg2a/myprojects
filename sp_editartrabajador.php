<?php
    // Retrieve data from the POST request
    $id = $_POST['idtrabajador'];
    $nom = $_POST['nom'];
    $apell = $_POST['apell'];
    $genero = $_POST['genero'];
    $fcontrato = $_POST['fcontrato'];
    $mpago = $_POST['mpago'];
    $telefono = $_POST['telefono'];

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE dt SET nom='$nom', apell='$apell', genero='$genero', fcontrato='$fcontrato', mpago='$mpago', telefono='$telefono' WHERE idtrabajador = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    // Check the update results
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Datos actualizados con éxito.");
        window.location.href="trabajadores.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al actualizar los datos.");
        window.location.href="rtrabajador.html";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);
?>
