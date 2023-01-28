<?php
session_start();
$user = $_SESSION['user'];
if(!isset($user)){
  header("location:login.php");
}else{
  
}
?>
<!doctype html>
<html lang="es">

<head>
  <title>Panel de Control</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <main class="d-flex flex-nowrap">
    <h1 class="visually-hidden">Bienvenido al Panel de control</h1>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img class="bi pe-none me-2" width="40" height="32" src="bootstrap-logo.svg" alt="logo">
        <span class="fs-4">Control Escolar</span>
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page"><i class="bi bi-house-fill"></i> Inicio</a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-person-vcard-fill"></i>
          Alumnos
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-person-fill-up"></i>
          Registro
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-person-fill-check"></i>
          Asistencia
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-clipboard2-check-fill"></i>
          Calificaciones
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-clipboard2-plus-fill"></i>
          Kardex
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-signpost-2-fill"></i>
          Disiplinas
          </a>
        </li>
        <li>
          <a href="" class="nav-link text-white">
          <i class="bi bi-tencent-qq"></i>
          Instructor
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center tex-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="myAvatar.png" class="img-circle" width="50px" height="50px" alt="avatar">
        </a>
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    <h2>Administrador: <?php echo $_SESSION['user']?></h2>
    <a href="cerrar_sesion.php">Cerrar Sesion</a>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>