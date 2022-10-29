<?php 
    class ViewDashController {
        public static function getHeadDash($nomePagina){
            echo('
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>'.$nomePagina.'</title>
                <link rel="stylesheet"
                href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
                <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
                <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
                <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
                <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
                <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
                <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
                <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
                <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
                <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
                <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
                <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
                <link rel="stylesheet" href="../../dist/css/styles.css">
            </head>
            ');
        }

        public static function getNavMain(){
            echo('
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index.php" class="nav-link">Home</a>
                </li>
                </ul>
        
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                    </div>
                </li>
        
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                </ul>
            </nav>
            ');
        }

        public static function getNav(){
            echo('
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                        <a href="../../index.php" class="nav-link"><p>Dashboard</p></a>
                    </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Cadastros
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="cadastro-produto.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Produtos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastro-categoria.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categorias</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cadastroCliente.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="vendas.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Vendas</p>
                        </a>
                    </li>
                    </ul>
                    </li>
                </ul>
            </nav>
            ');
        }

        public static function getImportJavaScript(){
            echo('
                <script src="../../plugins/jquery/jquery.min.js"></script>
                <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="../../plugins/select2/js/select2.full.min.js"></script>
                <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
                <script src="../../plugins/moment/moment.min.js"></script>
                <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
                <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
                <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
                <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
                <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
                <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
                <script src="../../dist/js/adminlte.min.js"></script>
                <script src="../../dist/js/demo.js"></script>
                <script src="../../dist/js/main.js"></script>
            ');
        }
    }
?>