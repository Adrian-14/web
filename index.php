<?php
require "total.php";
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <link rel="stylesheet" href="stilopanel.css" />
  <title>Panel de Control</title>
</head>

<body id="body">
  <div class="container">
    <nav class="navbar">
      <div class="nav_icon" onclick="toggleSidebar()">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <div class="navbar__left">
        <h6 class="header-pretitle fw-3">Inicio</h6>
        <h1 class="header-title fs-3">Panel de Control</h1>
      </div>
      <div class="navbar__right">
        <img src="myAvatar.png" width="30" height="30" class="rounded-circle" alt="avantar">
        <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['user']; ?></span>
      </div>
    </nav>

    <main>
      <div class="main__container">
        <div class="container">
          <div class="col py-0">
            <div class="row d-flex align-items-center">
              <div class="col-xl-5 col-lg-6">
                <div class="row justify-content-center align-items-center g-2">
                  <div class="col">Column</div>
                  <div class="col">Column</div>
                  <div class="col">Column</div>
                  <div class="col">Column</div>
                </div>
              </div>
              <div class="col-xl-7 col-lg-6">
                <div class="main__cards card border-0 shadow">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <h4 class="text-muted">Total de Alumnos por Comunidad</h4>
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

    <div id="sidebar">
      <div class="sidebar__title">
        <div class="sidebar__img">
          <img src="assets/logo.png" alt="logo" />
          <h1>Codersbite</h1>
        </div>
        <i onclick="closeSidebar()" class="fa fa-times" id="sidebarIcon" aria-hidden="true"></i>
      </div>

      <div class="sidebar__menu">
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-home"></i>
          <a href="#">Dashboard</a>
        </div>
        <h2>MNG</h2>
        <div class="sidebar__link">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <a href="#">Admin Management</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-building-o"></i>
          <a href="#">Company Management</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-wrench"></i>
          <a href="#">Employee Management</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-archive"></i>
          <a href="#">Warehouse</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-handshake-o"></i>
          <a href="#">Contracts</a>
        </div>
        <h2>LEAVE</h2>
        <div class="sidebar__link">
          <i class="fa fa-question"></i>
          <a href="#">Requests</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-sign-out"></i>
          <a href="#">Leave Policy</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-calendar-check-o"></i>
          <a href="#">Special Days</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-files-o"></i>
          <a href="#">Apply for leave</a>
        </div>
        <h2>PAYROLL</h2>
        <div class="sidebar__link">
          <i class="fa fa-money"></i>
          <a href="#">Payroll</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-briefcase"></i>
          <a href="#">Paygrade</a>
        </div>
        <div class="sidebar__logout">
          <i class="fa fa-power-off"></i>
          <a href="#">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js"></script>
</body>

</html>