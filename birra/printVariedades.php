<?php

include ("conexion/conexion.php");

// for recorre elementos con un numero conocido de filas
$consulta = "SELECT variedad, descripcion, imagen FROM variedades WHERE activa = 1";
$query = mysqli_query($conexion,$consulta);

// usar este while
$bloque = '';


while($info = mysqli_fetch_array($query)) {

	$variedad = $info['variedad'];
	$descripcion = $info['descripcion'];
	$imagen = $info['imagen'];

	$codigoVariedad = "info".str_replace (' ', '' , $variedad);

	$bloque .= '<div class="col-lg-3 col-md-6">';
	$bloque .= '	<div class="p-3 text-center">';
	$bloque .= '		<a data-fancybox data-src="#'.$codigoVariedad.'" href="javascript:;" >';
	$bloque .= '			<h4 class="h4 ">'.$variedad.'</h4>';
	$bloque .= '			<img class="img-fluid rounded-circle variedadesgrilla" src="'.$imagen.'" alt="">';
	$bloque .= '		</a>';
	$bloque .= '		<div id="'.$codigoVariedad.'"  class="variedadInfo">';
	$bloque .= '			<h2>'.$variedad.'</h2>';
	$bloque .= '			<p>'.$descripcion.'</p>';
	$bloque .= '		</div>';
	$bloque .= '	</div>';
	$bloque .= '</div>';
}


mysqli_close($conexion);

?>

                 
                  
