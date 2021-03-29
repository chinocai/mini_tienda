<?php
include("conexion_database.php");
$prod = $_GET['producto'];
mysqli_query($conexion_db,"UPDATE productos SET estado='finalizado' where ID='$prod'");
header("location:ver_pedidos.php");	
?>