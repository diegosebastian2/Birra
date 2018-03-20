<?php 

//error_reporting(0);
include "conexion/conexion.php";


$usuario = $_POST['usuario'];
$password = $_POST['password'];

//$conexion = mysqli_connect("localhost","root","","social") or die("Error al conectarse a la base de datos");

$consulta = "SELECT usuario, admin FROM usuarios WHERE usuario = '$usuario' and password = '$password'";

$query = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

$ingreso = mysqli_num_rows($query);

if($ingreso == 1){

	//header("Location: index.php");

	session_start();
	$datos = mysqli_fetch_array($query);

	if ($datos['admin'] ==1) {
			$_SESSION['usuario'] =$usuario;
		echo "<p>Bienvenido ".$usuario."</p>";
		echo "<a href='addVariedad.php'>Agregar variedades</a><br>";
		echo "<a href='delVariedad.php'>Eliminar variedades</a><br>";
	} else {
			echo "<p>Usted no es admin, get out...</p>";
	}
	



	/*echo "<p>Hola ".$_SESSION['nombre']."</p>";
	echo "<a href='publicaciones.php'>Ver publicaciones</a><br>";
	echo "<a href='add_publicaciones.php'>Nueva publicación</a><br>";*/


	
} else {
	//header("Location: error.php");
	echo "<p>Hubo un problema, usted no se encuentra en la base de datos...</p>";
	echo "<a href='index.php'>volver al Home?</a><br>";

}

mysqli_close($conexion);


 ?>