<?php
session_start();
if(isset($_SESSION['clientes'])){
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
include("conexion_database.php");


$consulta = mysqli_query($conexion_db,"SELECT * FROM productos");
?>
<a href="borrar_finalizados.php">Eliminar todos los pedidos</a>;
<div id="seccionFinalizado">
<?php
while($mostrarDatos = mysqli_fetch_assoc($consulta)){
	if($mostrarDatos['estado']=='finalizado'){
?>
	<div class="cajaProductos">
		<h3><?php echo $mostrarDatos['marca']." ".$mostrarDatos['modelo']?></h3>
		<img src="imagenes/<?php echo $mostrarDatos['imagen'];?>">
		<p><?php echo "Marca: ".$mostrarDatos['marca'] ?></p>
		<p><?php echo "Color: ".$mostrarDatos['color'] ?></p>
		<div class="fin">
			<a href="borrar_finalizados.php?producto=<?php echo $mostrarDatos['ID']; ?>">Eliminar Pedido</a>
		</div>			
	</div>

	<?php
	}
	}
	?>
</div>
<?php
}else{
    header("location:index.php?errorSesion");
}
?>