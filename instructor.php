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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="controlstyle.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="menuLateral d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline"><img src="bootstrap-logo.svg" alt="logo" width="30px" height="25px"> Control Panel</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="controlpanel.php" class="nav-link text-white">
                                    <i class="bi bi-house-fill me-2"></i><span class="ms-1 d-none d-sm-inline">Inicio</span>
                                </a>
                            </li>
                            <li>
                                <a href="alumnos.php" class="nav-link text-white">
                                    <i class="bi bi-people-fill me-2"></i><span class="ms-1 d-none d-sm-inline">Alumnos</span>
                                </a>
                            </li>
                            <li>
                                <a href="registro.php" class="nav-link text-white">
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
                                <a href="instructor.php" class="nav-link text-white active">
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

                <div class="col py-0">
                    <div class="main-content">
                        <div class="header">
                            <div class="container-fluid">
                                <div class="header-body">
                                    <div class="row align-items-center row">
                                        <div class="col">
                                            <h6 class="header-pretitle fw-3">Datos</h6>
                                            <h1 class="header-title fs-3">Instructor</h1>
                                        </div>
                                        <div class="col-auto">
                                            <form class="d-flex" role="search">
                                                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                                                <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                                            </form>
                                        </div>
                                        <div class="col d-flex justify-content-end">
                                            <img src="myAvatar.png" alt="avatar" width="30" height="30" class="rounded-circle">
                                            <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row d-flex align-items-center justify-content-center">
                                <form class="row g-3" action="altaM.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-auto">
                                        <label for="validationDefault03" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="validationDefault03" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault03" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" name="apellido1" id="validationDefault03" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault03" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" name="apellido2" id="validationDefault03" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Disiplina</label>
                                        <select id="inputState" name="disciplina" class="form-select">
                                            <option selected>Selecciona...</option>
                                            <option value="Danza">Danza</option>
                                            <option value="Teatro">Teatro</option>
                                            <option value="Musica">Musica</option>
                                            <option value="Artes plasticas y visuales">Artes plasticas y visuales</option>
                                        </select>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <button class="btn btn-primary" type="submit">Agregar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="container pt-5">
                            <div class="row">
                                <table class="table table-striped table-sm align-middle table-edge table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Primer Apellido</th>
                                            <th scope="col">Segundo Apellido</th>
                                            <th scope="col">Diciplina</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody id="datos">
                                        <?php
                                        foreach ($query as $row) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $row['id']; ?></th>
                                                <td><?php echo $row['nombre']; ?></td>
                                                <td><?php echo $row['apellido1']; ?></td>
                                                <td><?php echo $row['apellido2']; ?></td>
                                                <td><?php echo $row['disciplina']; ?></td>
                                                <td>
                                                    <div class="row d-flex align-items-center justify-content-center">
                                                        <div class="col-auto">
                                                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i></button>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Datos</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form>
                                                                                <div class="mb-3">
                                                                                    <label for="name" class="col-form-label">Nombre</label>
                                                                                    <input type="text" class="form-control" name="nombreedi" id="name">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Primer Apellido</label>
                                                                                    <input type="text" class="form-control" name="apellido1edi">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label for="message-text" class="col-form-label">Segundo Apellido</label>
                                                                                    <input type="text" class="form-control" name="apellido2edi">
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <label for="inputState" class="form-label">Disiplina</label>
                                                                                    <select id="inputState" name="disciplinaedi" class="form-select">
                                                                                        <option selected>Selecciona...</option>
                                                                                        <option value="Danza">Danza</option>
                                                                                        <option value="Teatro">Teatro</option>
                                                                                        <option value="Musica">Musica</option>
                                                                                        <option value="Artes plasticas y visuales">Artes plasticas y visuales</option>
                                                                                    </select>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="modal-footer mx-auto">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="button" class="btn btn-success">Actualizar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-auto">
                                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModa2" data-bs-whatever="@getbootstrap"><i class="bi bi-trash"></i></button>
                                                            <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabe2" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabe2">Eliminar Dato</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-center">
                                                                            <h4>¡ Seguro que quieres <span class="text-danger">ELIMINAR</span>!</h4>
                                                                        </div>
                                                                        <div class="modal-footer mx-auto">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                                                            <button type="button" class="btn btn-success">Aceptar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    </tbody>
                                <?php
                                        }
                                ?>
                                </table>
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