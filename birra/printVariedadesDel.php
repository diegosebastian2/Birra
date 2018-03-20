<?php

include ("conexion/conexion.php");

// for recorre elementos con un numero conocido de filas
$consulta = "SELECT id, variedad, CASE activa WHEN 1 THEN 'Si' ELSE 'No' END AS 'activa' FROM variedades";
$query = mysqli_query($conexion,$consulta);

// usar este while
$bloque = '';

while($info = mysqli_fetch_array($query)) {

	$variedad = $info['variedad'];
	$id = $info['id'];
	$activa = $info['activa'];

	$bloque .= '<tr>';
	$bloque .= '	<th scope="row">'.$id.'</th>';
	$bloque .= '	<td>'.$variedad.'</td>';
	$bloque .= '	<td>'.$activa.'</td>';
	$bloque .= '	<td><a class="links" href="delVariedadW.php?id='.$id.'">Eliminar</a></td>';
	$bloque .= '</tr>';
}


mysqli_close($conexion);

?>

                 
                  
