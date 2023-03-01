<?php
require 'consulta.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Alumnos</title>
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
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
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
                                <a class="dropdown-item text-danger" href="#"><i class="bi bi-power me-1"></i>Cerrar Sesion</a>
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
                            <span>Disciplinas</span>
                        </a>
                    </li>
                    <li>
                        <a href="instructor.php" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-video3"></i></span>
                            <span>Instructores</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <h3 class="text-muted m-4 p-4">Lista de Alumnos</h3>
                    <div class="table-responsive">
                        <table class="table table-striped data-table" style="width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">N°</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido(1)</th>
                                    <th scope="col">Apellido(2)</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Taller</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody id="datos">
                                <?php
                                foreach ($query as $row) { ?>
                                    <tr class="text-center">
                                        <th scope="row"><?php echo $row['id']; ?></th>
                                        <td><img src="<?php echo $row['foto']; ?>" class="rounded-circle" width="60px" height="60px"></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['apellido1']; ?></td>
                                        <td><?php echo $row['apellido2']; ?></td>
                                        <td><?php echo $row['telefono']; ?></td>
                                        <td><?php echo $row['disciplinains']; ?></td>
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
                                                                        <div class="mb-3 text-start">
                                                                            <label for="name" class="col-form-label">Nombre</label>
                                                                            <input type="text" class="form-control" name="nombreedi" id="name">
                                                                        </div>
                                                                        <div class="mb-3 text-start">
                                                                            <label for="message-text" class="col-form-label">Primer Apellido</label>
                                                                            <input type="text" class="form-control" name="apellido1edi">
                                                                        </div>
                                                                        <div class="mb-3 text-start">
                                                                            <label for="message-text" class="col-form-label">Segundo Apellido</label>
                                                                            <input type="text" class="form-control" name="apellido2edi">
                                                                        </div>
                                                                        <div class="col-md-3 text-start">
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