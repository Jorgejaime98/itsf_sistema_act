<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web | ITF</title>

    <link href="css/styles.css" rel="stylesheet" />
    <!-- Jquery 3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery ui -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <!-- ARchivos CSS-->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->

    <!-- Font Awesome-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Archivos JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>-->

    <!-- Datatables y sus plugins -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/sl-1.3.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/af-2.3.5/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/cr-1.5.3/sl-1.3.3/datatables.min.js"></script>


</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand text-center" href="#">ITF</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <a class="navbar-brand text-uppercase" href="#">
            <h6 class="mb-0">Instituto Tecnológico de Fúbtol</h6>
        </a>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php //echo $nombre; 
                                                                                                                                                                ?><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="img/foto_luis.jpg" style="width: 100%; max-width: 45px; height: auto; border-radius: 50%; vertical-align: middle; border: 0; padding: 0; margin: 10px; position: relative; overflow: hidden;" alt="">
                            </div>
                            <div class="pull-left info">
                                <p></p>
                                <span>0956239545</span>
                                <p class="py-2">ESTUDIANTE</p>
                                <p></p>
                            </div>
                        </div>
                        <div class="sb-sidenav-menu-heading">Menu Principal</div>

                        <a class="nav-link <?php
                                            if (isset($_GET["page"])) {
                                                if ($_GET["page"] == "cajas") {
                                                    echo "active";
                                                } else {
                                                    echo "";
                                                }
                                            }
                                            ?>" href="index.php?page=cajas">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Inicio
                        </a>



                        <div class="sb-sidenav-menu-heading">Control usuario</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Usuarios
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link <?php
                                                    if (isset($_GET["page"])) {
                                                        if ($_GET["page"] == "registros_usuarios") {
                                                            echo "active";
                                                        } else {
                                                            echo "";
                                                        }
                                                    }
                                                    ?>" href="index.php?page=registros_usuarios">Registros</a>
                                <a class="nav-link <?php
                                                    if (isset($_GET["page"])) {
                                                        if ($_GET["page"] == "permisos_usuarios") {
                                                            echo "active";
                                                        } else {
                                                            echo "";
                                                        }
                                                    }
                                                    ?>" href="index.php?page=permisos_usuarios">Permisos</a>
                            </nav>
                        </div>

                        <div class="sb-sidenav-menu-heading">Control Aulas</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Clases
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link <?php
                                                    if (isset($_GET["page"])) {
                                                        if ($_GET["page"] == "clases_docentes") {
                                                            echo "active";
                                                        } else {
                                                            echo "";
                                                        }
                                                    }
                                                    ?>" href="index.php?page=clases_docentes">Clases Docentes</a>
                                <a class="nav-link <?php
                                                    if (isset($_GET["page"])) {
                                                        if ($_GET["page"] == "clases_estudiantes") {
                                                            echo "active";
                                                        } else {
                                                            echo "";
                                                        }
                                                    }
                                                    ?>" href="index.php?page=clases_estudiantes">Clases Estudiantes</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        <!--Contenido-->
        <div id="layoutSidenav_content">
            <div class="container p-2">
                <!--LLamanos las vistas modales-->


                <?php
                // isset() Sirve para saber si una variable esta definida o es null.
                // Se simula lista blanca de enclaces en la URL
                if (isset($_GET["page"])) {
                    if (
                        $_GET["page"] == "cajas" ||
                        $_GET["page"] == "registros_usuarios" ||
                        $_GET["page"] == "permisos_usuarios" ||
                        $_GET["page"] == "clases_docentes" ||
                        $_GET["page"] == "clases_estudiantes" ||


                        $_GET["page"] == "salir"
                    ) {

                        include "paginas/" . $_GET["page"] . ".php";
                    } else {
                        include "paginas/404.php";
                    }
                } else {
                    include "paginas/cajas.php";
                }
                ?>
            </div>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2019</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function() {
            $('.EditarUsuario').on('click', function() {
                $('#editarUsuarios').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#EditarId').val(data[0]);                
                $('#EditarEmail').val(data[1]);
                $('#EditarPassword').val(data[2]);
                $('#EditarRol').val(data[3]);
                $('#EditarEstado').val(data[4]);
                $('#EditarRol_id').val(data[5]);
                
                
            });
        });

    </script>
    <script type="text/javascript" src="js/datatable.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

</body>

</html>]