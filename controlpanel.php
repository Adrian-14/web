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
          <div class="menuLateral d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-none d-sm-inline"><img src="bootstrap-logo.svg" alt="logo" width="30px" height="25px"> Control Panel</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="controlpanel.php" class="nav-link active">
                <i class="bi bi-house-fill me-2"></i><span class="ms-1 d-none d-sm-inline active">Inicio</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link text-white">
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
                <a href="#" class="nav-link text-white">
                <i class="bi bi-person-square me-2"></i><span class="ms-1 d-none d-sm-inline">Instructor</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="myAvatar.png" alt="avatar" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user'];?></span>
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
        <div class="b-example-divider"></div>
        <div class="col py-3">
          <div class="main-content">
            <div class="header">
              <div class="container-fluid">
                <div class="header-body">
                  <div class="row align-items-end row">
                    <div class="col">
                      <h6 class="header-pretitle fw-3">Inicio</h6>
                      <h1 class="header-title fs-3">Control Panel</h1>
                    </div>
                    <div class="col-auto">
                      <img src="myAvatar.png" alt="avatar" width="30" height="30" class="rounded-circle">
                      <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user'];?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl col-md-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="align-items-center row">
                        <div class="col">
                          <h6 class="text-uppercase text-muted mb-2">
                            Total
                          </h6>
                          <span class="h2 mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl col-md-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="align-items-center row">
                        <div class="col">
                          <h6 class="text-uppercase text-muted mb-2">
                            Total
                          </h6>
                          <span class="h2 mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl col-md-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="align-items-center row">
                        <div class="col">
                          <h6 class="text-uppercase text-muted mb-2">
                            Total
                          </h6>
                          <span class="h2 mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl col-md-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="align-items-center row">
                        <div class="col">
                          <h6 class="text-uppercase text-muted mb-2">
                            Total
                          </h6>
                          <span class="h2 mb-0"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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