<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar SEVRI</title>
</head>
<body>
	<?php 
	   include('../../controladora/ctrListaAnalisis.php');
	   include("../../controladora/ctrListaParametro.php");
	   include("../../controladora/ctrListaRiesgo.php");

	   $idAnalisis = $_GET['idAnalisis'];
	   echo "$idAnalisis";
	   $control = new ctrListaAnalisis();
	   $analisis = $control->obtenerAnalisis($idAnalisis);
	   $controlParametro = new ctrlListaParametro();
	   $controlRiesgo = new ctrlListaRiesgo();

	   $id = $analisis->getID();
	   $idRiesgo = $analisis->getIdRiesgo();
	   $probabilidad = $analisis->getProbabilidad();
	   $impacto = $analisis->getImpacto();
	   $nivelRiesgo = $analisis->getNivelRiesgo();
	   $medidaControl = $analisis->getMedidaControl();
	   $clasificacionMedida = $analisis->getCalificacionMedida();
       echo "$controlRiesgo->obtenerRiesgo($idRiesgo)->getNombre()";
	 ?>

	 <h1>Modificar Analisis</h1>

	 <div class="general">
		<div class="formulario">
			<form id="actualizarAnalisis" method="POST">
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
						<input class="form-control" type="text" name="medidaControl" id="MedidaControl" placeholder="Medida de Control" value="<?php echo "$medidaControl"; ?>">
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
					
					<input type="submit" value="Guardar" class="btn btn-default" onclick="actualizarAnalisis()">
				</div>
			</form>
		</div>
	</div>
	 <div id="confirmarEliminar" style="display: none">
					<div id= "mensaje"> </div>
					<button class="btn btn-success" type="button" id="confirmar" onclick="eliminarCompraLote()">
						<span class='glyphicon glyphicon-pencil'></span> Confirmar
					</button>
					<button class="btn btn-success" type="button" id="cancelar" onclick="cancelarAccion()">
						<span class='glyphicon glyphicon-pencil'></span> Cancelar
					</button>
					<input type="text" id="t_dato" style="display: none" value="">
		</div>
		<div id="mRespuesta">
			
		</div>
</body>
</html>