<?php
    // Retrieve data from the POST request
    $id = $_POST['id_ing'];
    $nom = $_POST['ningreso'];
    $apell = $_POST['cprecio'];
    $genero = $_POST['descripcion'];
    $fcontrato = $_POST['fechaing'];
    $mpago = $_POST['mpago'];

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE ingresos SET cprecio='$apell', descripcion='$genero', fechaing='$fcontrato', mpago='$mpago' WHERE ningreso = '$nom'";

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
        window.location.href="editaringreos.html";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);