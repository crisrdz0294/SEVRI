<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar SEVRI</title>
	
</head>
<body>
	<?php
			include("../../controladora/ctrListaAnalisis.php");
			include("../../controladora/ctrListaParametro.php");
			include("../../controladora/ctrListaRiesgo.php");
			$controlAnalisis = new ctrListaAnalisis();
			$listaAnalisis = $controlAnalisis->obtenerListaAnalisis();
			$controlParametro = new ctrListaParametro();
			$controlRiesgo = new ctrListaRiesgo();
	?>
	
			<div class="input-group buscar1">
	           <span class="input-group-addon">Buscar</span>
	           <input id="filtrar" type="text" class="form-control" placeholder="Ingresa...">
        	</div>
			<div>
				<table border="1">
					<thead>
						<tr>
							<th>Riesgo</th>
							<th>Probabilidad</th>
							<th>Impacto</th>
							<th>Nivel Riesgo</th>
							<th>Medida Control</th>
							<th>Calificacion Medida</th>
							<th>Opcion 1</th>
							<th>Opcion 2</th>
						</tr>
					</thead>
					<tbody class="buscar">
						<?php 
						foreach ($listaAnalisis as $analisis): 
						?>
							<tr>
								<td><?php echo $controlRiesgo->obtenerRiesgo($analisis->getIdRiesgo())->getNombre()?></td>
								<td><?php echo $controlParametro->obtenerParametro($analisis->getProbabilidad())->getDescriptorParametro();?></td>
								<td><?php echo $controlParametro->obtenerParametro($analisis->getImpacto())->getDescriptorParametro();?></td>
								<td><?php echo $analisis->getNivelRiesgo();?></td>
								<td><?php echo $analisis->getMedidaControl();?></td>
								<td><?php echo $controlParametro->obtenerParametro($analisis->getCalificacionMedida())->getDescriptorParametro();?></td>
								<td style="text-align:center;"><button class="btn btn-danger" type="button" onclick="paginaModificarAnalisis($analisis->getId())"><span class='glyphicon glyphicon-pencil'></span>Modificar</button></td>
								<td style="text-align:center;"><button class="btn btn-danger" type="button" onclick="#"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>
							</tr>
						
						<?php 
						endforeach;
						?>
					</tbody>
				</table>
			</div>

			<div id="contenedorConfirmacion" style="display: none">
				<div id="mensajeConfirmacion"></div>
				<input type="button" id="cancelar" name="cancelar" value="Cancelar" onclick="cancelarEliminar()">
				<input type="button" id="confirmar" name="confirmar" value="Confirmar" onclick="eliminarSevri()">
				<input type="hidden" id="idAnalisis" name="idAnalisis">
			</div>
			
	</body>
</html>