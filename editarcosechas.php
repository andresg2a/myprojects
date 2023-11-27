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
    <title>Editar cosechas</title>
</head>
<body>
<?php
    $id = $_GET['id_cosecha'];
    $nom = $_GET['mcosecha'];
    $apell = $_GET['tcosecha'];
    $genero = $_GET['crecogida'];
    $fcontrato = $_GET['cperdida'];
    $mpago = $_GET['fechacosecha'];
    
?>
<img class="wave" src="img/fondo.svg">
<div class="container">
    <div class="img"></div>
    <div class="login-container">
        <form action="../SoftCafe/sp_editarcosechas.php" method="POST">
            <img class="avatar" src="img/logo.PNG">
            <h2>Editar cosecha</h2>
            <br>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>N - Cosecha</h5>
                    <input class="input" type="number" name="id_cosecha" value="<?=$id?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Metodo de Cosecha</h5>
                    <input class="input" type="text" name="mcosecha" value="<?=$nom?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Tiempo de cosecha</h5>
                    <input class="input" type="text" name="tcosecha" value="<?=$apell?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Cantidad Recogida</h5>
                    <input class="input" type="number" name="crecogida" value="<?=$genero?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Cantidad Perdida</h5>
                    <input class="input" type="number" name="cperdida" value="<?=$fcontrato?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Fecha de la cosecha</h5>
                    <input class="input" type="date" name="fechacosecha" value="<?=$mpago?>" required>
                </div>
            </div>
            <input type="submit" class="btn" value="Actualizar">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
