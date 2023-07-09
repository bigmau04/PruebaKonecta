<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria | Productos</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
    <!-- boostrap -->
    <link rel="stylesheet" href="public/plugins/boostrap/bootstrap.min.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <?php
        include 'views/layout/sidebar/admin.php';
        ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Todos los productos</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="callout callout-success">
                        <h5>Producto más Stock</h5>
                        <?php if (isset($data["mayor_stock"])) { ?>
                            <p><?php echo $data["mayor_stock"]['nombre']; ?></p>
                        <?php } ?>
                        <h6>Consulta</h6>
                        <code>
                            SELECT nombre FROM productos
                            ORDER BY stock DESC
                            LIMIT 1;
                        </code>
                        <p>La consulta ordena los productos por la cantidad de stock de manera descendente, lo que significa que el primer registro que se muestre será el que tenga la mayor cantidad de stock. Luego, la cláusula LIMIT 1 se encarga de mostrar únicamente ese registro.</p>
                    </div>
                    <div class="callout callout-success">
                        <h5>Producto más vendido</h5>
                        <?php if (isset($data["producto_vendido"])) { ?>
                            <p>Producto: <?php echo $data["producto_vendido"]['nombre']; ?></p>
                            <p>Ventas: <?php echo $data["producto_vendido"]['total_ventas']; ?></p>
                        <?php } ?>
                        <h6>Consulta</h6>
                        <code>
                            SELECT productos.nombre, SUM(ventas.cantidad) AS total_ventas <br>
                            FROM ventas <br>
                            INNER JOIN productos ON ventas.id_producto = productos.id <br>
                            GROUP BY productos.nombre <br>
                            ORDER BY total_ventas DESC <br>
                            LIMIT 1;

                        </code>
                        <p>La consulta une las tablas de ventas y productos por medio de la cláusula INNER JOIN, utilizando el id del producto como clave de unión. Luego, se agrupa el resultado por el nombre del producto y se suman las cantidades vendidas para cada uno de ellos. Finalmente, se ordena la consulta de manera descendente según el total de ventas y se muestra únicamente el primer registro mediante la cláusula LIMIT 1. El resultado mostrará el nombre del producto más vendido y la cantidad total de ventas.</p>
                    </div>
                    <!-- modales -->
                </div>
                <!-- /fin container-fluid -->
            </div>
            <!-- /fin contenido principal -->
        </div>
        <!-- /.contenido -->
        <!-- Main Footer -->
        <?php
        include 'views/layout/footer/footer.php';
        ?>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <script>
        const btnSelecionar = document.querySelector('#btnSelecionar');
        btnSelecionar.addEventListener('click', datos);

        function datos() {
            flete = prompt('Ingrese valor flete:', '');
        }
    </script>
    <!-- jQuery -->
    <script src="public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="public/plugins/boostrap/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="public/js/adminlte.min.js"></script>
    <script src="public/js/main_pedidosseparador.js"></script>
    <!-- Selec2 -->
    <script src="public/plugins/select2/select2.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2({
                dropdownParent: $('#despacho')
            });
        });
    </script>
</body>

</html>