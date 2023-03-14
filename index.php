<?php
require "total.php";
require "consulta.php";
session_start();
$user = $_SESSION['user'];
if (!isset($user)) {
  header("location:login.php");
} else {
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Panel de Control</title>
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
          <li class="my-4">
            <hr class="dropdown-divider bg-light" />
          </li>
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
              <span>Más</span>
              <span class="ms-auto">
                <span class="me-2">
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
      <div class="row d-flex align-items-center">
        <h2 class="mt-3 mb-3 text-muted">Información General</h2>
        <div class="col-xl-6 col-lg-6">
          <div class="row">
            <div class="col-6">
              <div class="card mb-4 border-0 shadow">
                <div class="card-body">
                  <div class="text-center">
                    <h5 class="fw-normal mt-0 text-muted">Alumnos</h5>
                    <h3 class="mt-3 mb-3 text-center">
                      <span class="mb-0"><?= $rowcount ?></span>
                    </h3>
                    <p class="text-muted">Cursando</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card mb-4 border-0 shadow">
                <div class="card-body">
                  <div class="text-center">
                    <h5 class="fw-normal mt-0 text-muted">Maestros</h5>
                    <h3 class="mt-3 mb-3 text-center">
                      <span class="mb-0">0</span>
                    </h3>
                    <p class="text-muted">Dando Clase</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="card mb-4 border-0 shadow">
                <div class="card-body">
                  <div class="text-center">
                    <h5 class="fw-normal mt-0 text-muted">Talleres</h5>
                    <h3 class="mt-3 mb-3 text-center">
                      <span class="mb-0">0</span>
                    </h3>
                    <p class="text-muted">Activos</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card mb-4 border-0 shadow">
                <div class="card-body">
                  <div class="text-center">
                    <h5 class="fw-normal mt-0 text-muted">Comunidades</h5>
                    <h3 class="mt-3 mb-3 text-center">
                      <span class="mb-0">0</span>
                    </h3>
                    <p class="text-muted">En Total</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="card border-0 shadow">
            <div class="card-body">
              <h4 class="text-muted">Comunidades</h4>

              <div>
                <canvas id="myChart"></canvas>
              </div>

              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

              <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                  type: 'bar',
                  data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                      label: 'Alumnos',
                      data: [0, 0, 0, 0, 0, 0],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="card mb-4 border-0 shadow">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Lista de Alumnos
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped hover data-table" style="width: 100%;">
                  <thead class="text-center">
                    <tr>
                      <th scope="col">N°</th>
                      <th scope="col">Foto</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido(1)</th>
                      <th scope="col">Apellido(2)</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Taller Libre</th>
                      <th scope="col">Taller Externo</th>
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
                        <td><?php echo $row['taller_libre']; ?></td>
                        <td><?php echo $row['taller_externo']; ?></td>
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
                                        <div class="row">
                                          <div class="col">
                                            <label for="inputState" class="form-label">Teller Libre</label>
                                            <select id="inputState" name="disciplinains" class="form-select">
                                              <option selected value="none">Selecciona...</option>
                                              <option value="Artes Plasticas Juvenil">Artes Plasticas Juvenil</option>
                                              <option value="Artes Plasticas Infantil">Artes Plasticas Infantil</option>
                                              <option value="Ajedrez">Ajedrez</option>
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
                                          <div class="col">
                                            <label for="inputState" class="form-label">Teller Externo</label>
                                            <select id="inputState" name="tallerexterno" class="form-select">
                                              <option selected value="none">Selecciona...</option>
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
  </main>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>