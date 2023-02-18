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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
        <div class="main__cards">
          <div class="card">
            <i class="bi bi-people-fill"></i>
            <div class="card_inner">
              <p class="text-primary-p">Alumnos</p>
              <span class="font-bold text-title"><?php echo $rowcount; ?></span>
            </div>
          </div>

          <div class="card">
            <i class="bi bi-person-video3"></i>
            <div class="card_inner">
              <p class="text-primary-p">Instructores</p>
              <span class="font-bold text-title">2467</span>
            </div>
          </div>

          <div class="card">
            <i class="fa fa-video-camera fa-2x text-yellow" aria-hidden="true"></i>
            <div class="card_inner">
              <p class="text-primary-p">Number of Videos</p>
              <span class="font-bold text-title">340</span>
            </div>
          </div>

          <div class="card">
            <i class="fa fa-thumbs-up fa-2x text-green" aria-hidden="true"></i>
            <div class="card_inner">
              <p class="text-primary-p">Number of Likes</p>
              <span class="font-bold text-title">645</span>
            </div>
          </div>
        </div>
        <div class="charts">
          <div class="charts__left">
            <div class="charts__left__title">
              <div>
                <h1>Daily Reports</h1>
                <p>Cupertino, California, USA</p>
              </div>
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>
            <div id="apex1"></div>
          </div>

          <div class="charts__right">
            <div class="charts__right__title">
              <div>
                <h1>Stats Reports</h1>
                <p>Cupertino, California, USA</p>
              </div>
              <i class="fa fa-usd" aria-hidden="true"></i>
            </div>

            <div class="charts__right__cards">
              <div class="card1">
                <h1>Income</h1>
                <p>$75,300</p>
              </div>

              <div class="card2">
                <h1>Sales</h1>
                <p>$124,200</p>
              </div>

              <div class="card3">
                <h1>Users</h1>
                <p>3900</p>
              </div>

              <div class="card4">
                <h1>Orders</h1>
                <p>1881</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

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
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="script.js"></script>
</body>

</html>