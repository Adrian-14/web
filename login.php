<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Control Escolar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body class="text-center w-100">
    
<main class="form-signin w-100 m-auto">
  <form action="validar.php" method="post" enctype="multipart/form-data">
    <img class="mb-4" src="bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user" required>
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="clave" required>
      <label for="floatingPassword">Contraseña</label>
    </div>
    <button id="btnlogin" class="w-100 btn btn-lg btn-primary" type="submit" value="ingresar">Iniciar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023 - Adrian Hernández</p>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>