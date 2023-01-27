<?php
require "conn.php";
session_start();

$user=$_POST['user'];
$clave=$_POST['clave'];

$consulta="SELECT COUNT(*) as contar FROM login WHERE email='$user' and clave='$clave'";
$respuesta=mysqli_query($conn, $consulta);
$array=mysqli_fetch_array($respuesta);

if($array['contar'] > 0){
    $_SESSION['user'] = $user;
    header("location:controlpanel.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Credenciales Incorrectas
        </div>
    </div>
    <?php
}
mysqli_free_result($respuesta);
mysqli_close($conn);