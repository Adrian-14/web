<?php

include "conn.php";

$user=$_POST['user'];
$clave=$_POST['clave'];

$consulta="SELECT * FROM database WHERE email='$user' and clave='$clave'";
$resultado=mysqli_query($conn, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
    header("location:controlpanel.php");
}else{
    echo "Error al Ingresar";
}
mysqli_free_result($resultado);
mysqli_close($conn);