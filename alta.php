<?php 
require "conn.php";

$nom = $_REQUEST["txtnom"];
$foto = $_FILES['foto']['name'];
$ruta = $_FILES['foto']['tmp_name'];
$destino = "fotos/".$foto;
copy($ruta,$destino);
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$fecha_nacimiento = $_POST['fecha_naci'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$telefonoemergencia = $_POST['telefonoemergencia'];
$genero = $_POST['genero'];
$localidad = $_POST['localidad'];
$municipio = $_POST['municipio'];
$taller_libre = $_POST['tallerlibre'];
$taller_externo = $_POST['tallerexterno'];
$fecha_ingreso = $_POST['fechaingreso'];

$insertar = "INSERT INTO alumnos (foto, nombre, apellido1, apellido2, fecha_naci, edad, domicilio, correo, telefono, telefonoemergencia, genero, localidad, municipio, tallerlibre, tallerexterno, fechaingreso) VALUES ('$destino', '$nombre', '$apellido1', '$apellido2', '$fecha_nacimiento', '$edad', '$domicilio, '$email', '$telefono', '$telefonoemergencia', '$genero', '$localidad', '$municipio', '$taller_libre', '$taller_externo', '$fecha_ingreso') ";

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