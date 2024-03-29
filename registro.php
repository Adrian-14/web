<?php
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Registro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#"><img src="fotos/logo.png" alt="logo" width="180" height="50"></a>
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
                                        <span class="me-2"><i class="bi bi-mortarboard-fill"></i></span>
                                        <span>Talleres Internos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-mortarboard-fill"></i></span>
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

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="col py-3">
                <div class="main-content">
                    <div class="header">
                        <div class="container-fluid">
                            <div class="header-body">
                                <div class="row align-items-end row">
                                    <div class="col">
                                        <h6 class="header-pretitle">Registro de Alumnos</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <form action="alta.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <h3 class="text-muted">Datos del Alumno</h3>
                                    <!--
                                    <div class="col-md-12">
                                        <label for="formFile" class="form-label">Foto</label>
                                        <div class="col-sm-12 col-md-6">
                                            <input type="file" accept="image/*" class="form-control" name="foto" required>
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" aria-label="nombre">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Primer Apellido</label>
                                        <input type="text" name="apellido1" class="form-control" placeholder="Primer Apellido" aria-label="1erapellido">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Segundo Apellido</label>
                                        <input type="text" name="apellido2" class="form-control" placeholder="Segundo Apellido" aria-label="2doapellido">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                                        <input type="date" name="fecha_nacimiento" class="form-control" aria-label="fecha">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Edad</label>
                                        <input type="text" name="edad" class="form-control" aria-label="2doapellido">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="don" class="form-label">Domicilio</label>
                                        <input type="text" name="domicilio" class="form-control" aria-label="curp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="correo" class="form-label">Correo</label>
                                        <input type="email" name="correo" class="form-control" aria-label="curp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="correo" class="form-label">Telefono</label>
                                        <input type="num" name="telefono" class="form-control" aria-label="curp">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="correo" class="form-label">Telefono de Emergencia</label>
                                        <input type="num" name="telefono_emergencia" class="form-control" aria-label="curp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Genero</label>
                                        <select id="inputState" name="genero" class="form-select">
                                            <option selected>Seleccione...</option>
                                            <option value="mexicana">Hombre</option>
                                            <option value="extranjera">Mujer</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Grado de Estudios</label>
                                        <select id="inputState" name="grado" class="form-select">
                                            <option selected>Seleccione...</option>
                                            <option value="Primaria">Primaria</option>
                                            <option value="Secundaria">Secundaria</option>
                                            <option value="Preparatoria">Preparatoria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="comu" class="form-label">Localidad</label>
                                        <input type="text" name="localidad" class="form-control" aria-label="curp">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="mun" class="form-label">Municipio</label>
                                        <input type="text" name="municipio" class="form-control" aria-label="curp">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Teller Libre</label>
                                        <select id="inputState" name="taller_libre" class="form-select">
                                            <option selected value="0">Selecciona...</option>
                                            <option value="Artes Plasticas Juvenil">Artes Plasticas Juvenil</option>
                                            <option value="Artes Plasticas Infantil">Artes Plasticas Infantil</option>
                                            <option value="Ajedrez">Ajedrez</option>
                                            <option value="Ajedrez Comunidad">Ajedrez en Comunidad</option>
                                            <option value="Lengua Otomi">Lengua Otomi</option>
                                            <option value="Banda de Viento">Banda de Viento</option>
                                            <option value="Violin">Violin</option>
                                            <option value="Guitarra">Guitarra</option>
                                            <option value="Dibujo Artistico">Dibujo Artistico</option>
                                            <option value="Pintura en Tela">Pintura en Tela</option>
                                            <option value="Club de Tareas">Club de Tareas</option>
                                            <option value="Computacion Basico">Computacion Basico</option>
                                            <option value="Hora de cuento">Hora de cuento</option>
                                            <option value="Circulos de lectura">Circulos de lectura para Jovenes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Teller Externo</label>
                                        <select id="inputState" name="taller_externo" class="form-select">
                                            <option selected value="0">Selecciona...</option>
                                            <option value="Baby Ballet">Baby Ballet</option>
                                            <option value="Ballet Infantil">Ballet Infantil</option>
                                            <option value="Ballet Clasico">Ballet Clasico</option>
                                            <option value="Lengua de Señas Mexicanas">Lengua de Señas Mexicanas</option>
                                            <option value="Fotografia Semilleros Creativos">Fotografia Semilleros Creativos</option>
                                            <option value="Piano">Piano</option>
                                            <option value="Recreación Inicial">Recreación Inicial</option>
                                            <option value="Textil">Textil Basico de encuadernacion</option>
                                            <option value="Tela de Marco">Tela de Marco Arte Textil</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="mun" class="form-label">Fecha de Ingreso</label>
                                        <input type="date" name="fecha_ingreso" class="form-control" aria-label="curp">
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col text-end">
                                    <button class="btn btn-success" type="submit">Aceptar</button>
                                    <button class="btn btn-danger" type="submit"><a href="registro.php"></a>Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>