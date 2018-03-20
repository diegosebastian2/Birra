<?php 

error_reporting(0);

include "conexion/conexion.php";


if(isset($_POST['variedad']) and isset($_POST['descripcion'])){
	
	$imagenPath = 'img/imagen.jpg';
	$variedad = $_POST['variedad'];
	$descripcion = mysqli_real_escape_string($conexion,$_POST['descripcion']);
	$descripcion = utf8_decode($descripcion);
	$imagen = $_POST['imagen'];

	$imagen = str_replace ('imagen', $imagen , $imagenPath);


	//$conexion = mysqli_connect("localhost","root","","social") or die("Error al conectarse a la base de datos");

	$consulta = "INSERT INTO variedades(variedad,descripcion,imagen) VALUES('$variedad','$descripcion','$imagen')";

	$query = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

	if ($query == true){

		echo "<p>Se insertó ".$variedad." correctamente</p>";
		echo "<a href='index.php'>Home</a><br>";

	} else {
		echo "<p>Hubo un problema...</p>";
		echo "<a href='index.php'>Home</a><br>";
	}
} else {

	echo "<p>Debe ingresar al menos variedad y descripción</p>";
	echo "<a href='index.php'>Home</a><br>";
}



mysqli_close($conexion);


 ?>