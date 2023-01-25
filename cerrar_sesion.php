<?php
session_start();
$varsesion = $_SESSION['user'];
if($varsesion == null || $varsesion = ''){
  echo 'Aceeso no autorizado';
  die();
}
session_destroy();
header("location:login.php");

?>