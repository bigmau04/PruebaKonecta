<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria | Vender</title>
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
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php
        include 'views/layout/sidebar/admin.php';
        ?>
        <!-- Contenido -->
        <div class="content-wrapper">
            <!-- Cabecera del contenido -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Realizar Ventas</h1>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Contenido principal -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md">
                            <div class="card">
                                <div class="card-header">
                                    <!-- AQUÍ VA EL BUSCADOR -->
                                    <div class="container mt-4">
                                        <div class="row">
                                            <div class="col-md-8 offset-md-2">
                                                <form action="index.php?c=vender&a=index" method="POST">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Buscar:</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="id" value="<?php echo isset($data["id"]) ? $data["id"] : ''; ?>" placeholder="Ingrese Identificación" aria-label="Buscar..." aria-describedby="button-addon2">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" id="button-addon2">Buscar</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Producto</th>
                                                                <th>Precio</th>
                                                                <th>Peso</th>
                                                                <th>Stock</th>
                                                                <th>Cantidad</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                <?php
                                                                if (isset($data["producto"])) {
                                                                    echo '<form action="index.php?c=vender&a=store" method="POST">';
                                                                    echo '<input type="hidden" name="id" value=' . $data["producto"]["id"] . '>';
                                                                    echo '<form action="" method="POST">';
                                                                    echo "<td>" . $data["producto"]["id"] . "</td>";
                                                                    echo "<td>" . $data["producto"]["nombre"] . "</td>";
                                                                    echo "<td>" . $data["producto"]["precio"] . "</td>";
                                                                    echo "<td>" . $data["producto"]["peso"] . "</td>";
                                                                    echo "<td>" . $data["producto"]["stock"] . "</td>";
                                                                    echo '<td><div class="input-group">
                                                                                <input type="number" class="form-control form-control-sm" name="cantidad" value="1" min="1" max="' . $data["producto"]["stock"] . '">
                                                                            </div></td>';
                                                                    echo '<td><button type="submit" class="btn btn-primary">Vender</button></td>';
                                                                    echo '</form>';
                                                                } else {
                                                                    echo '<td class="text-center" colspan="6"> No hay resultados.</td>';
                                                                }
                                                                ?>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="card-header">
                                    Ventas realizadas
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID venta</th>
                                                            <th scope="col">Producto</th>
                                                            <th scope="col">Cantidad</th>
                                                            <th scope="col">Precio Unitario</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($data["ventas"] as $dato) {
                                                            echo "<tr>";
                                                            echo "<td>" . $dato["id_venta"] . "</td>";
                                                            echo "<td>" . $dato["nombre_producto"] . "</td>";
                                                            echo "<td>" . $dato["cantidad"] . "</td>";
                                                            echo "<td>$ " . $dato["precio"] . "</td>";
                                                            echo "<td>$ " . $dato["valor_venta"] . "</td>";
                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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