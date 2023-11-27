<?php
    // Retrieve data from the POST request
    $id = $_POST['id_cafetal'];
    $nom = $_POST['ubicacion'];
    $apell = $_POST['area'];
    $genero = $_POST['tcafe'];
    $fcontrato = $_POST['fecha'];
    $mpago = $_POST['plantas'];
 

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE cafetales SET ubicacion='$nom', area='$apell', tcafe='$genero', fecha='$fcontrato', plantas='$mpago' WHERE id_cafetal = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    // Check the update results
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Datos actualizados con éxito.");
        window.location.href="cafetales.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al actualizar los datos.");
        window.location.href="editarcafetales.php";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);
?>