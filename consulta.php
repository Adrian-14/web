<?php
require "conn.php";

$consultar = "SELECT * FROM registro";
$query = mysqli_query($conn, $consultar);
$array =  mysqli_fetch_array($query);

?>