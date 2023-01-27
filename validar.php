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
    <?php
}
mysqli_free_result($respuesta);
mysqli_close($conn);