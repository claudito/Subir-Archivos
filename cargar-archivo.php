<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cargar Archivo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h1>Cargar Archivo</h1>
		<hr>
		<form action="subir-archivo.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="archivo"  class="form-control" required="">
		<button class="btn btn-primary">Cargar</button>
		</form>
			
		</div>
	</div>
</div>
</body>
</html>