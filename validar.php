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
    echo "Error al Ingresar";
}
mysqli_free_result($respuesta);
mysqli_close($conn);