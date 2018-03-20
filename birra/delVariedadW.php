<?php 

error_reporting(1);

include "conexion/conexion.php";

$id = $_REQUEST['id'];


//$conexion = mysqli_connect("localhost","root","","social") or die("Error al conectarse a la base de datos");

$consulta = "DELETE FROM variedades WHERE id = '$id'";

$query = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

if ($query == true){

	echo "<p>Se elimino la variedad nro:".$id." correctamente</p>";
	header('Location: delVariedad.php');

} else {
	echo "<p>Hubo un problema...</p>";
}

mysqli_close($conexion);


 ?>