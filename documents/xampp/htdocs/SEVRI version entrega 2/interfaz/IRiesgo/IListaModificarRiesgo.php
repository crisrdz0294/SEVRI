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
		$lista =$control->obtenerRiesgos();	
	?>
	<div class="general">
		<div class="formulario">
			<form id="IListaModificarRiesgo" method="Post" role="form">
				<div class="contenedor">
					<div class="table-responsive" id="contenedor">
  						<table border="1">
    						<tr>
								<th>
									<label class="control-label">Nombre</label>
								</th>
								<th>
									<label  class="control-label">Descripcion</label>
								</th>
								<th>
									<label  class="control-label">Estado</label>
								</th>
								<th>
									<label class="control-label">Monto Economico</label>
								</th>
								<th>
									<label  class="control-label">Categoria</label>
								</th>
								<th>
									<label  class="control-label">Causa</label>
								</th>
								<th>
									<label  class="control-label">Modificar</label>
								</th>
							</tr>
							<?php 
							foreach ($lista as $riesgo){
					            echo "<tr>					        
						        		<td>
											<label class=\"control-label\">".$riesgo->getNombre()."</label>
										</td>
							        	<td>
											<label class=\"control-label\">".$riesgo->getDescripcion()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getEstaActivo()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getMontoEconomico()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getIdCategoria()."</label>
										</td>
										<td>
											<label class=\"control-label\">".$riesgo->getCausa()."</label>
										</td>
								        <td><input class=\"btn btn-default\" type=\"button\" value=\"Modificar\" onclick=\"cargarPagina('IModificarRiesgo.php?idRiesgo=".$riesgo->getId()."')\"/></td>
								    </tr>";
								}
							?>
  						</table>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>