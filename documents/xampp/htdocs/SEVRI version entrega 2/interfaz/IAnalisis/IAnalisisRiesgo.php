<!DOCTYPE html>
<html lang="en">
<head>
	<title>Analisis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/styleRiesgo.css">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script lang="JavaScript" src="../../js/jsAnalisis.js"></script>
</head>
<body>
	<?php
		include ("../../Controladora/ctrDatosSevri.php");
		$control = new ctrDatosSevri;
		$listaRiesgos = $control->obtenerRiesgos();
		$listaParametros = $control->obtenerParametros();
	?>
	<div class="general">
		<div class="formulario">
			<form id="IAnalisisRiesgo" method="Post" role="form">
				<div class="contenedor">

					<div class="inputs form-group">
						<label  class="control-label">Riesgo</label>
						<select class="form-control" id="riesgo" name="riesgo"> 
							<?php 
								foreach ($listaRiesgos as $riesgo){
									echo "<option value=".$riesgo->getId().">".$riesgo->getNombre()."</option>";
								}
							?>
						</select>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Probabilidad</label>
						<select class="form-control" id="probabilidad" name="probabilidad"> 
							<?php 
								foreach ($listaParametros as $parametro){
									if (strcmp ($parametro->getNombreParametro() , "Probabilidad" ) == 0) {
										echo "<option value=".$parametro->getIdParametro().">".$parametro->getDescriptorParametro()."</option>";
									}
								}
							?>
						</select>
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Impacto</label>
						<select class="form-control" id="impacto" name="impacto"> 
							<?php 
								foreach ($listaParametros as $parametro){
									if (strcmp ($parametro->getNombreParametro() , "Impacto" ) == 0) {
										echo "<option value=".$parametro->getIdParametro().">".$parametro->getDescriptorParametro()."</option>";
									}
								}
							?>
						</select>
					</div>
					<div class="inputs form-group">
						<label class="control-label">Medida de Control</label>
						<input class="form-control" type="text" name="medidaControl" id="MedidaControl" placeholder="Medida de Control">
					</div>
					<div class="inputs form-group">
						<label  class="control-label">Calificacion Media</label>
						<select class="form-control" id="CalificacionMedia" name="CalificacionMedia"> 
							<?php 
								foreach ($listaParametros as $parametro){
									if (strcmp ($parametro->getNombreParametro() , "Calificacion" ) == 0) {
										echo "<option value=".$parametro->getIdParametro().">".$parametro->getDescriptorParametro()."</option>";
									}
								}
							?>
						</select>
					</div>
					
					<input type="submit" value="Guardar" class="btn btn-default" onclick="insertarAnalisis()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>