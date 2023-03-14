<?php
include 'funciones.php';
$id = $_GET['id'];
delete('alumnos','id', $id);
header("location:index.php");


?>