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
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$telefonoemergencia = $_POST['telefono_emergencia'];
$genero = $_POST['genero'];
$grado = $_POST['grado'];
$localidad = $_POST['localidad'];
$municipio = $_POST['municipio'];
$taller_libre = $_POST['taller_libre'];
$taller_externo = $_POST['taller_externo'];
$fecha_ingreso = $_POST['fecha_ingreso'];

$insertar = "INSERT INTO alumnos (foto, nombre, apellido1, apellido2, fecha_nacimiento, edad, domicilio, correo, telefono, telefono_emergencia, genero, grado, localidad, municipio, taller_libre, taller_externo, fecha_ingreso) VALUES ('$destino', '$nombre', '$apellido1', '$apellido2', '$fecha_nacimiento', '$edad', '$domicilio, '$email', '$telefono', '$telefonoemergencia', '$genero', '$grado', '$localidad', '$municipio', '$taller_libre', '$taller_externo', '$fecha_ingreso') ";

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