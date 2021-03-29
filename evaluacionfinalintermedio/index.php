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

<body>

<form name="form1" method="post" action="validar.php">
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 col-sm-2 control-label" for="exampleInputFirstName2">Escriba su D.N.I</label>
                        <div class="col-md-9 col-sm-10">
                            <input name="dni" type="number" class="form-control" id="exampleInputFirstName2" placeholder="Escriba su D.N.I">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-sm-2 control-label" for="exampleInputLastName2">Escriba su clave</label>
                        <div class="col-md-9 col-sm-10">
                            <input name="clave"  type="password" class="form-control" id="exampleInputLastName2" placeholder="Escriba su clave">
                        </div>

                   
                   <label>Escriba código de seguridad: </label>

  <input name="confirmacion" type="text" id="confirmacion" /><br/>
  <?php
$numero1= rand(0,9);
$numero2= rand(0,9);
$numero3= rand(0,9);
$minus = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
$mayus = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$signos = array("!","#","$","%","&","=");

$generador_min = rand(0,26);
$generador_may = rand(0,26);
$generador_sig = rand(0,5);


$_SESSION["codigos"] = ($numero1).($minus[$generador_min]).($numero2).($numero3); // Guardamos el texto del CAPTCHA en la sesion
echo "<img src=imagen2.php>";
?>
    <input type="submit" name="Submit" value="Comprobar" />
                   
                   
                </form>
 

<?php
if(isset($_GET['error']))
    echo "Los datos ingresados son incorrectos";
elseif (isset($_GET['sesioninvalida']))
    echo "Para acceder a esta sección debe ingresar como cliente.";
?>

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
