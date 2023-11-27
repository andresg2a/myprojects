<?php

    $usuario = $_POST ['user'];
    $contraseña = $_POST ['pass'];
  
    //Conexion a MySQL

    $conexion = mysqli_connect("localhost", "root", "", "admin");
    $consulta = "SELECT * FROM  credenciales WHERE user='$usuario' and pass='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0){
        header("Location:inicio.php");
    }else{
        echo'<script type="text/javascript">
        alert("¡Credenciales incorrectos! Por favor verifique y vuelva a intentarlo.");
        window.location.href="login.html";
        </script>';
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>