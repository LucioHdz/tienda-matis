<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <!--<link rel="icon" type="image/png" href="../assets/img/favicon.png">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Proyecto Tiendita | TESJI
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="./index.php" class="simple-text logo-normal">
                    Proyecto Tiendita
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="./index.php">
                            <i class="fas fa-shopping-cart"></i>
                            <p>Agregar Productos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./verproductos.php">
                            <i class="now-ui-icons design_app"></i>
                            <p>Ver Productos</p>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="./agregarproveedores.php">
                            <i class="fas fa-parachute-box"></i>
                            <p>Agregar Proveedor</p>
                        </a>
                    </li>
                    <li>
                        <a href="./verproveedores.php">
                            <i class="fab fa-dropbox"></i>
                            <p>Ver Proveedores</p>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="./agregarcategoria.html">
                            <i class="fas fa-sitemap"></i>
                            <p>Agregar Categoria</p>
                        </a>
                    </li>
                    <li>
                        <a href="./vercategoria.php">
                            <i class="fas fa-boxes"></i>
                            <p>Ver Categorias</p>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="./agregar-categoprod.html">
                            <i class="fas fa-archive"></i>
                            <p>Agregar Categoria-Producto</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="./ver-categoprod.php">
                            <i class="fas fa-book-open"></i>
                            <p>Ver Categoria-Producto</p>
                        </a>
                    </li>
                    <hr>
                    <li >
                        <a href="./agregar-venta.html">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                          <p>Agregar Venta</p>
                        </a>
                      </li>
                      <li>
                        <a href="./ver-venta.php">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                          <p>Ver Venta</p>
                        </a>
                      </li>
                      <hr>
                      <li>
                        <a href="./agregar-ticket.html">
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                          <p>Agregar Ticket</p>
                        </a>
                      </li>
                      <li>
                        <a href="./ver-ticket.php">
                          <i class="fa fa-list-alt" aria-hidden="true"></i>
                          <p>Ver Ticket</p>
                        </a>
                      </li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg mb-5 w-100" style="background: linear-gradient(
                90deg
                , #1155ff, rgba(0, 242, 255, 0.85));">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>

                        <div class="row">
                            <h2 class="m-3 ml-5 text-light">Ver Categoria-Producto</h2>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <!--Inicio Tabla-->
                    <table class="table table-hover col-10 m-auto" style="font-size: 10px;">
                        <thead>
                            <tr>
                                <th scope="col">Identificador</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Producto</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                include("connections/Connections.php");
                                $query = "SELECT
                                categoriaproducto.idCategoriaProducto AS id, 
                                categoria.nombre AS Categoria, 
                                producto.nombre AS Producto
                            FROM
                                producto
                                INNER JOIN
                                categoriaproducto
                                ON 
                                    producto.codigoDeBarras = categoriaproducto.codigoDeBarras
                                INNER JOIN
                                categoria
                                ON 
                                    categoria.idCategoria = categoriaproducto.idCategoria ORDER BY producto.nombre";
                                $resultado = mysqli_query($connection,$query);

                                while($results = mysqli_fetch_array($resultado)){
                                    echo "
                                    <tr>
                                    <th scope='row'>".$results["id"]."</th> 
                                    <th scope='row'>".$results["Categoria"]."</th> 
                                    <th scope='row'>".$results["Producto"]."</th> 
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                    <!--Fin Tabla-->
                </div>
            </div>
            <footer class="footer">
                <div class=" container-fluid ">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>.
                        Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
</body>

</html>