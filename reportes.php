<?php
require "consultaM.php";
session_start();
$user = $_SESSION['user'];
if (!isset($user)) {
    header("location:login.php");
} else {
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Panel de Control</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#"><i class="bi bi-bootstrap-fill me-2"></i>Panel de Control</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Buscar..." aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#"><i class="bi bi-person-circle me-1"></i>Perfil</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><i class="bi bi-gear-fill me-1"></i>Ajustes</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger" href="cerrar_sesion.php"><i class="bi bi-power me-1"></i>Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            Menu
                        </div>
                    </li>
                    <li>
                        <a href="index.php" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-house-fill"></i></span>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Alumnos
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-database-fill"></i></span>
                            <span>Datos</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="alumnos.php" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-person-lines-fill"></i></span>
                                        <span>Lista de Alumnos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="registro.php" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-person-rolodex"></i></span>
                                        <span>Registro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-person-check-fill"></i></span>
                                        <span>Talleres Internos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-clipboard-check-fill"></i></span>
                                        <span>Talleres Externos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Maestros
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-inboxes-fill"></i></span>
                            <span>Talleres</span>
                        </a>
                    </li>
                    <li>
                        <a href="instructor.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-video3"></i></span>
                            <span>Instructores</span>
                        </a>
                    </li>
                    <li>
                        <a href="reportes.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-clipboard2-fill"></i></span>
                            <span>Reportes</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-muted">Reportes de los Talleres</h3>
                <div class="col m-3">
                    <p class="text-center lead text-muted">Talleres Internos</p>
                </div>
            </div>
            <div class="row pb-3 gy-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Artes Platicas Juvenil</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/artes-juvenil.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Artes Platicas Infantil</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/artes-infantil.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ajedrez</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/ajedrez.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Lengua Otomi</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/otomi.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Danza Folklorica</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/danza.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Banda de Viento</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/banda.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Guitarra</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/guitarra.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Violin</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/violin.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Dibujo Artistico</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/dibujo.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Pintura en Tela</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/tela.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Club de Tareas</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/tareas.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Computación</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/computacion.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Hora de Cuento para niñas y niños</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/cuento.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Lectura para Jovenes "Amor a la Literatura"</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/lectura.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ajedrez Comunidades</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/ajedrezcomunidad.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m-3">
                        <p class="text-center lead text-muted">Talleres Externos</p>
                    </div>
                </div>
            </div>
            <div class="row pb-3 gy-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Baby Ballet</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/baby-ballet.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ballet Infantil</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/ballet-infantil.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Ballet Clasico</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/ballet-juvenil.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Lengua de Señas</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/seña.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Fotografia Semilleros Creativos</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/camara.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Piano</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/piano.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Recreacion Inicial</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/bebe.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow border-0">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Textil de encuadernacion</h5>
                                    <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                    <img src="assets/textil.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                    <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-3">
                        <div class="card shadow border-0">
                            <div class="card-body text-center">
                                <h5 class="card-title">Telar de Marco</h5>
                                <h6 class="card-subtitle text-muted">Lista de Alumnos</h6>
                                <img src="assets/telar.png" class="img-fluid m-3" alt="ajedrez" width="100px">
                                <button href="#" class="btn btn-primary card-link ">Descargar <i class="bi bi-cloud-arrow-down-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>