<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafeteria | Eliminar producto</title>
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
                            <h1 class="m-0">Eliminar Producto</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="modal-title">Eliminar producto "<?php echo $data["producto"]['nombre']; ?>"</h5>
                                </div>
                                <div class="card-body">
                                    <p>¿Está seguro que desea eliminar el producto?</p>
                                </div>
                                <div class="card-footer">
                                    <a href="index.php?c=producto&a=index" class="btn btn-secondary">Atras</a>
                                    <a href="index.php?c=producto&a=destroy&id=<?php echo $data["producto"]['id']; ?>" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'views/layout/footer/footer.php';
        ?>
    </div>

    <!-- ./wrapper -->
    <!-- requiredD SCRIPTS -->
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