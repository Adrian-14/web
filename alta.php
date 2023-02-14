<?php 
require "conn.php";


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

$insertar = "INSERT INTO registro (foto, nombre, apellido1, apellido2, edad, nacionalidad, genero, fecha_nacimiento, curp, domicilio, comunidad, municipio) VALUES ('$imgContenido', '$nombre', '$apellido1', '$apellido2', '$edad', '$nacionalidad', '$genero', '$fecha_nacimiento', '$curp', '$domicilio', '$comunidad', '$municipio') ";

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

if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILE['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
    }
}
if(!empty($_GET['id'])){
    $result = $db->query("SELECT * FROM resgistro WHERE id={$_GET['id']}");
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();
        header("content-type: image/jpg");
        echo $imgDatos['foto'];
    }else{
        echo "Foto no Existe...";
    }
}
?> 