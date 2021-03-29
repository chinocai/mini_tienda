
<?php
session_start();
if(isset($_SESSION['clientes'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

     <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>

  </head>
  <body>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="mostrar_contenido.php" class="btn btn-danger">Volver al menu</a>
<?php
include("conexion_database.php");


$consulta = mysqli_query($conexion_db,"SELECT * FROM productos");
?>
<section id="seccionProcesando">
<?php
while($mostrarDatos = mysqli_fetch_assoc($consulta)){
	if($mostrarDatos['estado']=='Procesando'){
?>
	<div class="cajaProductos">
		<h3><?php echo $mostrarDatos['marca']." ".$mostrarDatos['modelo'] ?></h3>
		<img src="imagenes/<?php echo $mostrarDatos['imagen'];?>">
		<p><?php echo "Marca: ".$mostrarDatos['marca'] ?></p>
		<p><?php echo "Color: ".$mostrarDatos['color'] ?></p>		
		<div class="fin">
			<a href="cambia_estado.php?producto=<?php echo $mostrarDatos['ID']; ?>"class="btn btn-success">Finalizar Pedido</a>	
		</div>
	</div>

	<?php
	}
	}
	?>
</section>
<?php
}else{
    header("location:index.php?errorSesion");
}
?>
<a href="mostrar_contenido.php" class="btn btn-danger">Volver al menu</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>
</html>

