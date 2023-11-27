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
                    <a href="login.html" class="" id="">
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
                <h2>Ingresos</h2>
            </div>
            <div class="user--info">
                <form action="buscaringresos.php" method="post">
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
                            <th>Ingreso</th>
                            <th>Valor</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Forma de pago</th>
                            <th>Acciones</th>
                            <th><a href="ringreso.html">Agregar</a></th>
                        </tr>
                    </thead>
                    <?php
                    $sql = "SELECT * from ingresos";
                    $resultado = mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($resultado)) {
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $mostrar['ningreso'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['cprecio'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['descripcion'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['fechaing'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['mpago'] ?>
                                </td>
                                <td><button>
                                        <form action="editaringresos.php">
                                            <a
                                                href="editaringresos.php?ningreso=<?php echo $mostrar['ningreso'] ?>&cprecio=<?php echo $mostrar['cprecio'] ?>&descripcion=<?php echo $mostrar['descripcion'] ?>&fechaing=<?php echo $mostrar['fechaing'] ?>&mpago=<?php echo $mostrar['mpago'] ?>"><i
                                                    class="fas fa-edit"></i></a>
                                        </form>
                                    </button> o <button>
                                        <form action="eingreso.php" method="GET">
                                            <a href="eingreso.php?id_ing=<?php echo $mostrar['id_ing'] ?>"><i
                                                    class="fas fa-trash"></i></a>
                                        </form>
                                    </button></td>
                                <td><button>
                                        <form action="ringreso.html" method="POST">
                                            <a href="ringreso.html"><i class="fa-solid fa-plus"></i></a>
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
                                <a href="fpdf/PruebaV.php" target="_blank"><i class="fas fa-file-pdf"></i> Generar
                                    informe</a>
                            </button>
                        </td>
                    </tfoot>
                </table>
            </div>
        </div>


        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <span>CAFISOFT</span>
                    <h2>Egresos</h2>
                </div>
                <div class="user--info">
                    <form action="buscaregresos.php" method="post">
                        <div class="Search--box">
                            <i class="fa-solid fa-search"></i>
                            <input type="text" name="buscar1" placeholder="Buscar" />
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
                                <th>Egreso</th>
                                <th>Valor</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Forma de pago</th>
                                <th>Acciones</th>
                                <th><a href="regreso.html">Agregar</a></th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * from egresos";
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)) {
                            ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $mostrar['negreso'] ?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['cprecio'] ?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['descripcion'] ?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['fechaeg'] ?>
                                    </td>
                                    <td>
                                        <?php echo $mostrar['mpago'] ?>
                                    </td>
                                    <td><button>
                                            <form action="editaregresos.php">
                                                <a
                                                    href="editaregresos.php?negreso=<?php echo $mostrar['negreso'] ?>&cprecio=<?php echo $mostrar['cprecio'] ?>&descripcion=<?php echo $mostrar['descripcion'] ?>&fechaeg=<?php echo $mostrar['fechaeg'] ?>&mpago=<?php echo $mostrar['mpago'] ?>"><i
                                                        class="fas fa-edit"></i></a>
                                            </form>
                                        </button> o <button>
                                            <form action="eegreso.php" method="GET">
                                                <a href="eegreso.php? id_egre=<?php echo $mostrar['id_egre'] ?>"><i
                                                        class="fas fa-trash"></i></a>
                                            </form>
                                        </button></td>
                                    <td><button>
                                            <form action="regreso.html" method="POST">
                                                <a href="regreso.html"><i class="fa-solid fa-plus"></i></a>
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
                                    <a href="fpdf/PruebaV.php" target="_blank"><i class="fas fa-file-pdf"></i> Generar
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
                        <h2 class="logotipo">CAFISOFT</h2>
                    </div>
                    <div class="redes">
                        <span class=""><img src="img/facebook.png" width="42" style="width: 45px;"></span>

                        <span class=""><img src="img/instagram.png" width="42" style="width: 45px;"></span>
                        <span class=""><img src="img/linkedin.png" width="42" style="width: 45px;"></span>
                        <span class=""><img src="img/twitter.png" width="42" style="width: 45px;"></span>
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
                        <a href="#">Photography</a>


                    </div>

                </div>
                <br>
                <div class="derechos">
                    <p>Privacy Policy Terms and conditions</p>
                </div>
                <div class="derechos">
                    <p>Copyright©2022Informatica Studios. All right reserved</p>

                </div>
            </footer>
</body>

</html>