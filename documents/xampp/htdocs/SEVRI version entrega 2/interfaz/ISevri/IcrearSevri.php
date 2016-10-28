<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear SEVRI</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script lang="JavaScript" src="../../js/jsSevri.js"></script>
	
    
</head>
<body>
	<div class="general">
		<div class="formulario">
			<form id="IcrearSevri" method="Post" role="form">
				<div class="contenedor">
					<div class="inputs form-group">
						<label class="control-label">Nombre Sevri</label>
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="SEVRI-AÑO">
					</div>
					 <div class="inputs form-group">
						<label  class="control-label">Fecha Creación</label>
						<input  class="form-control"  type="date" name="fecha" id="fecha">
					</div>
					<input type="submit" value="Crear" class="btn btn-default" onclick="insertarSevri()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>