<?php
    // Retrieve data from the POST request
    $id = $_POST['id_inv'];
    $nom = $_POST['nproducto'];
    $apell = $_POST['stock'];
    $genero = $_POST['descripcion'];
    $fcontrato = $_POST['nalmacen'];

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE inventario SET nproducto='$nom', stock='$apell', descripcion='$genero', nalmacen='$fcontrato' WHERE id_inv = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    // Check the update results
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Datos actualizados con éxito.");
        window.location.href="inventario.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al actualizar los datos.");
        window.location.href="editarinventario.php";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);
?>
