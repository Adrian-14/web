<?php 
require "conn.php";

$imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$edad = $_POST['edad'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$fecha_nacimiento = $_POST['fecha_naci'];
$curp = $_POST['curp'];
$domicilio = $_POST['domicilio'];
$comunidad = $_POST['comunidad'];
$municipio = $_POST['municipio'];

$insertar = "INSERT INTO registro (foto, nombre, apellido1, apellido2, edad, nacionalidad, genero, fecha_nacimiento, curp, domicilio, comunidad, municipio) VALUES ('$imagen', '$nombre', '$apellido1', '$apellido2', '$edad', '$nacionalidad', '$genero', '$fecha_nacimiento', '$curp', '$domicilio', '$comunidad', '$municipio') ";

$query = mysqli_query($conn, $insertar);
if($query){
    echo "<script> alert('Registrado');
    location.href = 'registro.php';
    </script>";
}else{
    "<script> alert('No Registrado');
    location.href = 'registro.php';
    </script>";
}
?> 