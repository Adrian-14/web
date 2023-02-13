<?php 
require "conn.php";

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$diciplina = $_POST['diciplina'];

$insertar = "INSERT INTO maestros (nombre, apellido1, apellido2, diciplina) VALUES ('$nombre', '$apellido1', '$apellido2', '$diciplina') ";

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