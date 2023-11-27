<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/etrabajador.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar trabajador</title>
</head>
<body>
<?php
    $id = $_GET['idtrabajador'];
    $nom = $_GET['nom'];
    $apell = $_GET['apell'];
    $genero = $_GET['genero'];
    $fcontrato = $_GET['fcontrato'];
    $mpago = $_GET['mpago'];
    $telefono = $_GET['telefono'];
?>
<img class="wave" src="img/fondo.svg">
<div class="container">
    <div class="img"></div>
    <div class="login-container">
        <form action="../SoftCafe/sp_editartrabajador.php" method="POST">
            <img class="avatar" src="img/logo.PNG">
            <h2>Editar datos del trabajador</h2>
            <br>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Cédula</h5>
                    <input class="input" type="number" name="idtrabajador" value="<?=$id?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Nombre</h5>
                    <input class="input" type="text" name="nom" value="<?=$nom?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Apellido</h5>
                    <input class="input" type="text" name="apell" value="<?=$apell?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Genero</h5>
                    <input class="input" type="text" name="genero" value="<?=$genero?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Fecha de contratación</h5>
                    <input class="input" type="date" name="fcontrato" value="<?=$fcontrato?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Forma de pago</h5>
                    <input class="input" type="text" name="mpago" value="<?=$mpago?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Teléfono</h5>
                    <input class="input" type="number" name="telefono" value="<?=$telefono?>" required>
                </div>
            </div>
            <input type="submit" class="btn" value="Actualizar">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
