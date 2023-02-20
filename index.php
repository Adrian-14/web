<?php
require "total.php";
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
  <link rel="stylesheet" href="/controlstyle.css">

</head>

<body>
  <main class="d-flex flex-nowrap">
  <div id="sidebar">
      <div class="sidebar__title">
        <div class="sidebar__img">
          <img src="bootstrap-logo.svg" alt="logo" width="40px" height="32px" />
          <h1>Control Panel</h1>
        </div>
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
      </div>

      <div class="sidebar__menu">
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-home"></i>
          <a href="index.php">Inicio</a>
        </div>
        <h2>Menu</h2>
        <div class="sidebar__link">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <a href="alumnos.php" class="nav-link">Alumnos</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-building-o"></i>
          <a href="#">Instructor</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-wrench"></i>
          <a href="#">Registro</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-archive"></i>
          <a href="#">Asistencia</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-handshake-o"></i>
          <a href="#">Disiplinas</a>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>

    <div class="col py-0">
      <div class="main-content">
        <div class="header">
          <div class="container-fluid">
            <div class="header-body">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="header-pretitle fw-3">Inicio</h6>
                  <h1 class="header-title fs-3">Control Panel</h1>
                </div>
                <div class="col">
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
        <div class="container-fluid">
          <div class="row d-flex align-items-center">
            <div class="col-xl-5 col-lg-6">
              <div class="row">
                <div class="col-6">
                  <div class="widget-flat card mb-4 border-0 shadow">
                    <div class="card-body">
                      <div class="float-start">
                        <h5 class="fw-normal mt-0 text-muted">Alumnos</h5>
                        <h3 class="mt-3 mb-3 text-center"><span class="h2 mb-0"><?php echo $rowcount; ?></span></h3>
                        <p class="mb-0 text-muted">Cursando</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="widget-flat card mb-4 border-0 shadow">
                    <div class="card-body">
                      <div class="float-start">
                        <h5 class="fw-normal mt-0 text-muted">Instructores</h5>
                        <h3 class="mt-3 mb-3 text-center"><span class="h2 mb-0"><?php echo $rowcountins; ?></span></h3>
                        <p class="mb-0 text-muted">Dando Clases</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">
                <div class="col-6">
                  <div class="widget-flat card border-0 shadow">
                    <div class="card-body">
                      <div class="float-start">
                        <h5 class="fw-normal mt-0 text-muted">Diciplinas</h5>
                        <h3 class="mt-3 mb-3 text-center"><span class="h2 mb-0"><?php echo $rowcount; ?></span></h3>
                        <p class="mb-0 text-muted">Actuales</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="widget-flat card border-0 shadow">
                    <div class="card-body">
                      <div class="float-start">
                        <h5 class="fw-normal mt-0 text-muted">Comunidades</h5>
                        <h3 class="mt-3 mb-3 text-center"><span class="h2 mb-0"><?php echo $rowcount; ?></span></h3>
                        <p class="mb-0 text-muted">Ingresadas</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6">
              <div class="card-h-100 card border-0 shadow">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-2">
                    <h4 class="header-title text-muted">Total de Alumnos por Comunidad</h4>
                  </div>
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
                          label: 'Numero de Alumnos',
                          data: [12, 19, 3, 5, 2, 3],
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
                    let url = 'http://localhost/web/total.php'
                  </script>

                </div>
              </div>
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
  <script src="script.js"></script>
</body>

</html>