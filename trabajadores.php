<?php
$conexion = mysqli_connect("localhost", "root", "", "softcafe");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CAFISOFT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/proyec1.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <ul class="menu">
                <li>
                    <a href="inicio.php" class="" id="">
                        <i class="fas fa-home-alt"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="trabajadores.php" class="" id="">
                        <i class="fas fa-users"></i>
                        <span>Trabajadores</span>
                    </a>
                </li>
                <li>
                    <a href="inventario.php" class="" id="">
                        <i class="fas fa-newspaper"></i>
                        <span>Inventario</span>
                    </a>
                </li>
                <li>
                    <a href="ingresos.php" class="" id="">
                        <i class="fas fa-donate"></i>
                        <span>Ingresos y Egresos</span>
                    </a>
                </li>
                <li>
                    <a href="cosechas.php" class="" id="">
                        <i class="fas fa-briefcase"></i>
                        <span>Cosechas</span>
                    </a>
                </li>
                <li>
                    <a href="cafetales.php" class="" id="">
                        <i class="fas fa-seedling"></i>
                        <span>Cafetales</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="" id="">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Cerrar sesión</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>CAFISOFT</span>
                <h2>Trabajadores</h2>
            </div>
            <div class="user--info">
                <form action="buscartrabajadores.php" method="post">
                    <div class="Search--box">
                        <i class="fa-solid fa-search"></i>
                        <input type="text" name="buscar" placeholder="Buscar" />
                    </div>
                </form>
            </div>
        </div>

        <div class="tabular--wrapper">
            <h3 class="main--title">Datos</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Genero</th>
                            <th>Fecha de contratación</th>
                            <th>Forma de pago</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                            <th><a href="rtrabajadores.html">Agregar</a></th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * from dt";
                    $resultado = mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $mostrar['idtrabajador'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['nom'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['apell'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['genero'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['fcontrato'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['mpago'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['telefono'] ?>
                                </td>
                                <td><button>
                                        <form action="editartrabajador.php">
                                            <a
                                                href="editartrabajador.php?idtrabajador=<?php echo $mostrar['idtrabajador'] ?>&nom=<?php echo $mostrar['nom'] ?>&apell=<?php echo $mostrar['apell'] ?>&genero=<?php echo $mostrar['genero'] ?>&fcontrato=<?php echo $mostrar['fcontrato'] ?>&mpago=<?php echo $mostrar['mpago'] ?>&telefono=<?php echo $mostrar['telefono'] ?>"><i
                                                    class="fas fa-edit"></i></a>
                                        </form>
                                    </button> o <button>
                                        <form action="etrabajador.php" method="GET">
                                            <a href="etrabajador.php? idtrabajador=<?php echo $mostrar['idtrabajador'] ?>"><i
                                                    class="fas fa-trash"></i></a>
                                        </form>
                                    </button></td>
                                <td><button>
                                        <form action="rtrabajadores.html" method="POST">
                                            <a href="rtrabajadores.html"><i class="fa-solid fa-plus"></i></a>
                                        </form>
                                    </button></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                    <tfoot>
                        <td colspan="10">
                            <button class="btnpdf">
                                <a href="fpdf/Trabajadores.php" target="_blank"><i class="fas fa-file-pdf"></i> Generar
                                    informe</a>
                            </button>
                        </td>
                    </tfoot>
                </table>
            </div>
        </div>

        <footer class="pie">
            <div class="header">
                <div class="logo">
                    <img src="img/logo.PNG" alt="">
                    
                </div>
                
            </div>
            <hr>
            <div class="section">
                <div>
                    <h2>Ubicación</h2>
                    <a href="#">Neiva-Huila</a>
                    <a href="#">Calle 49 # 21-30</a>
                    <a href="#">Campus-Fet</a>
                    
                </div>
                <div>
                    <h2>Soporte</h2>
                    <a href="#">+57 314-276</a>
                    <a href="#">318-461-1223</a>
                    <a href="#">Aut@gmail.com</a>
                    
                </div>

                <div>
                    <h2>Tecnologias</h2>
                    <a href="#">Html y CSS</a>
                    <a href="#">JavaScript</a>
                    <a href="#">PHP</a>    
                </div>
                
            </div>
            <br>
            
            <div class="derechos">
                <p>Privacy Policy  Terms and conditions</p>
            </div>
            <div class="derechos">
            <p>Fundación Escuela Tecnologica Fet©2023. Duero | Sotelo | Cachaya</p>
                
            </div>
            <div class="redes">
                    <span class=""><img src="img/facebook.png" width="42" style="width: 45px;"></span>
                    
                    <span class=""><img src="img/instagram.png" width="42" style="width: 45px;"></span>
                    <span class=""><img src="img/linkedin.png" width="42" style="width: 45px;"></span>
                    <span class=""><img src="img/twitter.png" width="42" style="width: 45px;"></span>
                </div>
        </footer>
</body>

</html>