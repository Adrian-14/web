<?php 
require "conn.php";

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$tallerlibre = $_POST['tallerlibreM'];
$tallerexterno = $_POST['tallerexternoM'];

$insertar = "INSERT INTO maestros (nombre, apellido1, apellido2, tallerlibreM, tallerexternoM) VALUES ('$nombre', '$apellido1', '$apellido2', '$tallerlibre', '$tallerexterno',) ";

$query = mysqli_query($conn, $insertar);
if($query){
    echo "<script> alert('Registrado');
    location.href = 'instructor.php';
    </script>";
}else{
    "<script> alert('No Registrado');
    location.href = 'instructor.php';
    </script>";
}
?> 