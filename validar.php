<?php

include "conn.php";

$user=$_POST['user'];
$clave=$_POST['clave'];

$consulta="SELECT * FROM login WHERE email='$user' and clave='$clave'";
$respuesta=mysqli_query($conn, $consulta);

$filas=mysqli_num_rows($respuesta);

if($filas > 0){
    header("location:controlpanel.php");
}else{
    ?>
    <?php
    include("login.php");
    ?>
    <div class="alert alert-danger" role="alert" id="alert">
        Datos Incorrectos!
    </div>
    <?php
}
mysqli_free_result($respuesta);
mysqli_close($conn);