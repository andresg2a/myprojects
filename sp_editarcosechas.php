<?php
    // Retrieve data from the POST request
    $id = $_POST['id_cosecha'];
    $nom = $_POST['mcosecha'];
    $apell = $_POST['tcosecha'];
    $genero = $_POST['crecogida'];
    $fcontrato = $_POST['cperdida'];
    $mpago = $_POST['fechacosecha'];
    

    // Establish a database connection
    $conexion = mysqli_connect("localhost", "root", "", "softcafe");

    // Check the database connection
    if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the worker's information in the database
    $consulta = "UPDATE cosechas SET mcosecha='$nom', tcosecha='$apell', crecogida='$genero', cperdida='$fcontrato', fechacosecha='$mpago' WHERE id_cosecha = '$id'";

    $resultado = mysqli_query($conexion, $consulta);

    // Check the update results
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Datos actualizados con éxito.");
        window.location.href="cosechas.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Error al actualizar los datos.");
        window.location.href="editarcosechas.html";
        </script>';
    }

    // Close the database connection
    mysqli_close($conexion);
?>
