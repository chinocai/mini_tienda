<?php
session_start();
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

<?php
if (isset($_SESSION['clientes'])) {	
?>

<body>
<h3>Bienvenido cliente DNI: <?php echo $_SESSION["user"]; ?></h3>

<img src="acceso_clientes.png"> <br/><br/>
<h2>En esta sección encontrará información sobre sus pedidos y compras.</h2>
<form class='cliente-form' action="realizar_pedidos.php" method="POST">
                    <button class="btn btn-success" id='button' type="submit" name="salir" value="salir">Realizar pedido</button>
                    </form>
                    <form class='cliente-form' action="ver_pedidos.php" method="POST">
                        <button class="btn btn-warning" id='button' type="submit" name="salir" value="salir">Ver mis pedidos</button>
                    </form>
                    <form class='cliente-form' action="ver_pedidos_f.php" method="POST">
                        <button class="btn btn-danger" id='button' type="submit" name="salir" value="salir">Finalizar pedidos</button>
                    </form>
<h6><a href="salir.php" class="btn btn-outline-primary">Cerrar sesión</a></h6>

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
<?php
} else {
	header("location: index.php?sesioninvalida");
	exit();
}
?>

