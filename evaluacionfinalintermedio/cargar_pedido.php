<?php
include("conexion_database.php");
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$imagen = $_POST['imagen'];

if($marca && $modelo && $color && $imagen){
	mysqli_query($conexion_db,"INSERT INTO productos VALUES(DEFAULT,'$marca','$modelo','$color','$imagen',DEFAULT)");
	header("location: realizar_pedidos.php?ok");
}else{
	header("location: realizar_pedidos.php?datosInvalidos");
}
?>