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
$edad = $_POST['edad'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$fecha_nacimiento = $_POST['fecha_naci'];
$curp = $_POST['curp'];
$domicilio = $_POST['domicilio'];
$comunidad = $_POST['comunidad'];
$municipio = $_POST['municipio'];
$email = $_POST['correo'];
$institucion = $_POST['institucionins'];
$domicilioins = $_POST['domicilioins'];
$municipioins = $_POST['municipioins'];
$estadoins = $_POST['estadoins'];
$ciclo = $_POST['ciclo'];
$matricula = $_POST['matricula'];
$disciplina = $_POST['disciplinains'];
$fechaingreso = $_POST['fechaingreso'];

$insertar = "INSERT INTO alumnos (foto, nombre, apellido1, apellido2, edad, nacionalidad, genero, fecha_nacimiento, curp, domicilio, comunidad, municipio, correo, institucion, domicilioins, municipioins, estadoins, ciclo, matricula, disciplinains, fechaingreso) VALUES ('$destino', '$nombre', '$apellido1', '$apellido2', '$edad', '$nacionalidad', '$genero', '$fecha_nacimiento', '$curp', '$domicilio', '$comunidad', '$municipio', '$email', '$institucion', '$domicilioins', '$municipioins', '$estadoins', '$ciclo', '$matricula', '$disciplina', '$fechaingreso') ";

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