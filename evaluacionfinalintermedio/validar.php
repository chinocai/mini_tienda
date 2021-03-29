<?php
session_start();
//vemos si el usuario y contraseña es válido

$confirmacion = $_POST['confirmacion'];
if($confirmacion == $_SESSION['codigos'])
{
echo "<p>Codigo correcto</p>";
}else{
echo "<p>Error</p>";
}
if ($_POST["dni"]=="17658932" && $_POST["clave"]=="dm5456" && $confirmacion == $_SESSION['codigos'] or $_POST["dni"]=="20546832" && $_POST["clave"]=="fg8965" && $confirmacion == $_SESSION['codigos']){
	//usuario y contraseña válidos
	//crear variable para la sesión
	$_SESSION["clientes"]= "1";
	$_SESSION["user"]= $_POST["dni"];
	$_SESSION["pass"]= $_POST["clave"];
	
	header ("location: mostrar_contenido.php");	
}else {
	//si no existe, ir a la página de inicio
	header("location: index.php?errorusuario=si");
}

?>


