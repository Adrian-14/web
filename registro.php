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
    <title>Panel de Control</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="controlstyle.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline"><img src="bootstrap-logo.svg" alt="logo" width="30px" height="25px"> Control Panel</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="controlpanel.php" class="nav-link text-white">
                                    <i class="bi bi-house-fill me-2"></i><span class="ms-1 d-none d-sm-inline active">Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="alumnos.php" class="nav-link text-white">
                                    <i class="bi bi-people-fill me-2"></i><span class="ms-1 d-none d-sm-inline">Alumnos</span>
                                </a>
                            </li>
                            <li>
                                <a href="registro.php" class="nav-link text-white active">
                                    <i class="bi bi-calendar3 me-2"></i><span class="ms-1 d-none d-sm-inline">Registro</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="bi bi-table me-2"></i> <span class="ms-1 d-none d-sm-inline">Asistencia</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="bi bi-clipboard2-check-fill me-2"></i><span class="ms-1 d-none d-sm-inline">Calificaciones</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="bi bi-card-checklist me-2"></i><span class="ms-1 d-none d-sm-inline">Kardex</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <i class="bi bi-briefcase-fill me-2"></i><span class="ms-1 d-none d-sm-inline">Disiplinas</span> </a>
                            </li>
                            <li>
                                <a href="instructor.php" class="nav-link text-white">
                                    <i class="bi bi-person-square me-2"></i><span class="ms-1 d-none d-sm-inline">Instructor</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="myAvatar.png" alt="avatar" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user']; ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">Sobre mi</a></li>
                                <li><a class="dropdown-item" href="#">Ajustes</a></li>
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col py-3">
                    <div class="main-content">
                        <div class="header">
                            <div class="container-fluid">
                                <div class="header-body">
                                    <div class="row align-items-end row">
                                        <div class="col">
                                            <h6 class="header-pretitle">Registro</h6>
                                            <h1 class="header-title">Registro de Alumnos</h1>
                                        </div>
                                        <div class="col-auto">
                                            <button class="lift btn btn-primary" type="button">Cerrar Sesion</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <form action="alta.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <h2 class="display-6">Datos del Estudiante</h2>
                                        <div class="col-md-3">
                                            <label for="formFile" class="form-label">Foto</label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" id="foto" name="imagen" multiple>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="formFile" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre(s)" aria-label="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="formFile" class="form-label">Primer Apellido</label>
                                            <input type="text" name="apellido1" class="form-control" placeholder="Primer Apellido" aria-label="1erapellido">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="formFile" class="form-label">Sgundo Apellido</label>
                                            <input type="text" name="apellido2" class="form-control" placeholder="Segundo Apellido" aria-label="2doapellido">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Edad</label>
                                            <select id="inputState" name="edad" class="form-select">
                                                <option selected>Seleccione...</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inputState" class="form-label">Nacionalidad</label>
                                            <select id="inputState" name="nacionalidad" class="form-select">
                                                <option selected>Seleccione...</option>
                                                <option value="mexicana">Mexicana</option>
                                                <option value="extranjera">Estranjera</option>
                                            </select>
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
                                            <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                                            <input type="date" name="fecha_naci" class="form-control" aria-label="fecha">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="curp" class="form-label">CURP</label>
                                            <input type="text" name="curp" class="form-control" aria-label="curp">
                                        </div>
                                        <br>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="don" class="form-label">Domicilio</label>
                                                <input type="text" name="domicilio" class="form-control" aria-label="curp">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="comu" class="form-label">Comunidad</label>
                                                <input type="text" name="comunidad" class="form-control" aria-label="curp">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="mun" class="form-label">Municipio</label>
                                                <input type="text" name="municipio" class="form-control" aria-label="curp">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success" type="submit">Alta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>