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
                    <div class=" card m-3 ">
                        <div class="card-header mb-3">
                            <a href="index.php?c=producto&a=create" class="btn btn-primary">
                                Nuevo Producto
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table caption-top table-sm table-hover " id="productos">
                                <caption>Lista de productos</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Referencia</th>
                                        <th scope="col">Categoría</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Peso</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Fecha de creación</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data["productos"] as $dato) {
                                        echo "<tr>";
                                        echo "<td>" . $dato["id"] . "</td>";
                                        echo "<td>" . $dato["nombre"] . "</td>";
                                        echo "<td>" . $dato["referencia"] . "</td>";
                                        echo "<td>" . $dato["categoria"] . "</td>";
                                        echo "<td>" . $dato["precio"] . "</td>";
                                        echo "<td>" . $dato["peso"] . "</td>";
                                        echo "<td>" . $dato["stock"] . "</td>";
                                        echo "<td>" . $dato["fecha_creacion"] . "</td>";
                                        echo '<td><div class="btn-group btn-group-sm" role="group" aria-label="Small button group">';
                                        echo '<a class="btn btn-outline-primary" href="index.php?c=producto&a=edit&id=' . $dato["id"] . '"><i class="fas fa-edit"></i></a>';
                                        echo '<a class="btn btn-outline-danger" href="index.php?c=producto&a=eliminar&id=' . $dato["id"] . '"><i class="fas fa-trash-alt"></i></a>';
                                        echo '</div></td>';                                        
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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