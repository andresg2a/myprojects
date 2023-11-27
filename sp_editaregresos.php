<?php
    // Retrieve data from the POST request
    $id = $_POST['id_egre'];
    $nom = $_POST['negreso'];
    $apell = $_POST['cprecio'];
    $genero = $_POST['descripcion'];
    $fcontrato = $_POST['fechaeg'];
    $mpago = $_POST['mpago'];
    

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE egresos SET cprecio='$apell', descripcion='$genero', fechaeg='$fcontrato', mpago='$mpago' WHERE negreso = '$nom'";

    $resultado = mysqli_query($conexion, $consulta);

    // Check the update results
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Datos actualizados con éxito.");
        window.location.href="ingresos.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al actualizar los datos.");
        window.location.href="editaregresos.php";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);
?>