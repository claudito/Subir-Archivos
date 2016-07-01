<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Archivo Cargado</title>
</head>
<body>
<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<h1>Detalle del Archivo:</h1>
<hr>
<table class="table table-bordered table-condensed">
<thead>
<tr class="success">
<td>Propiedad</td>
<td>Valor</td>
</tr>
</thead>
<tbody>
<?php 
date_default_timezone_set('America/Lima');

foreach ($_FILES['archivo'] as $key => $value) 	
{	
	echo "
	<tr>
    <td>$key</td>
    <td>$value</td>
	</tr>";
}

?>
</tbody>
</table>



<?php


if ($_FILES['archivo']['type']=='image/png' || $_FILES['archivo']['type']=='image/gif' ) 
{

$fecha             = date('Y-m-d-H-i-s-');
$nombre            = $fecha.$_FILES['archivo']['name'];
$archivo_temporal  = $_FILES['archivo']['tmp_name'];
$destino           = "archivos/".$nombre;
move_uploaded_file($archivo_temporal,$destino);
echo "
<center>
<a href='archivos/$nombre'>Descargar</a></br>
<img src='archivos/".$nombre."' alt='' class='img-responsive img-thumbnail'>
</center>
";

	
}

else
{
	echo "<label class='btn btn-danger'>Archivo no permitido</label>";
}



 ?>
			</div>
		</div>
	</div>	
</body>
</html>