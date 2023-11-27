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
    <title>Editar inventario</title>
</head>
<body>
<?php
    $id = $_GET['id_inv'];
    $nom = $_GET['nproducto'];
    $apell = $_GET['stock'];
    $genero = $_GET['descripcion'];
    $fcontrato = $_GET['nalmacen'];
?>
<img class="wave" src="img/fondo.svg">
<div class="container">
    <div class="img"></div>
    <div class="login-container">
        <form action="../SoftCafe/sp_editarinventario.php" method="POST">
            <img class="avatar" src="img/logo.PNG">
            <h2>Editar datos del inventario</h2>
            <br>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Id inventario</h5>
                    <input class="input" type="text" name="id_inv" value="<?=$id?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Nombre del producto</h5>
                    <input class="input" type="text" name="nproducto" value="<?=$nom?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Stock</h5>
                    <input class="input" type="number" name="stock" value="<?=$apell?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Descripcion</h5>
                    <input class="input" type="text" name="descripcion" value="<?=$genero?>" required>
                </div>
            </div>
            <div class="input-div uno focus">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <h5>Almacen</h5>
                    <input class="input" type="text" name="nalmacen" value="<?=$fcontrato?>" required>
                </div>
            </div>
            <input type="submit" class="btn" value="Actualizar">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
