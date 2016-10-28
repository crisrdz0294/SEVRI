<!DOCTYPE html>
<html lang="en">
<head>
	<title>Identificacion</title>
	<meta charset="UTF-8">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<script lang="JavaScript" src="../../js/jsRiesgo.js"></script>
</head>
<body>
	<?php
		include ("../../Controladora/ctrDatosSevri.php");
		$control = new ctrDatosSevri;	
		$lista =$control->obtenerCategorias();	
	?>
	<div class="general">
		<div class="formulario">
			<form id="IIdentificarRiesgo" method="Post" role="form">
				<div class="contenedor">
					<div class="inputs form-group">
						<label class="control-label">Nombre</label><br>
						<input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del riesgo"><br><br>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Descripcion</label><br>
						<textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Descripcion del riesgo"></textarea><br><br>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Estado</label><br>
						<select class="form-control" id="estado" name="estado"> 
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select><br><br>
					</div>
					<div class="inputs form-group">
						<label class="control-label">Monto Economico</label><br>
						<input class="form-control" type="text" name="monto" id="monto" placeholder="Monto economico"><br><br>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Categoria</label><br>
						<select class="form-control" id="categoria" name="categoria"> 
							<?php 
								foreach ($lista as $categoria){
									echo "<option value=".$categoria->getIdCategoria()." >".$categoria->getNombreCategoria()."</option>";
								}
							?>
						</select><br><br>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Causa</label><br>
						<textarea class="form-control" rows="5" id="causa" name="causa" placeholder="Causa del riesgo"></textarea><br><br>
					</div>
					<input type="submit" value="Crear" class="btn btn-default" onclick="insertarRiesgo()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>