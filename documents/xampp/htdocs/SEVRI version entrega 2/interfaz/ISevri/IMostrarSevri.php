<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar SEVRI</title>
	
</head>
<body>
	<?php
			include("../../controladora/ctrListaSevri.php");
			$control = new ctrListaSevri();
			$lista = $control->obtenerListaSevri();
			
	?>
	
			<div class="input-group buscar1">
	           <span class="input-group-addon">Buscar</span>
	           <input id="filtrar" type="text" class="form-control" placeholder="Ingresa...">
        	</div>
			<div>
				<table border="1">
					<thead>
						<tr>
							<th>Nombre Version</th>
							<th>Fecha Creacion</th>
							<th>Opcion 1</th>
							<th>Opcion 2</th>
						</tr>
					</thead>
					<tbody class="buscar">
						<?php 
						foreach ($lista as $sevri): 
						?>
							<tr>
								<td><?php echo $sevri->getNombreVersion();?></td>
								<td><?php echo $sevri->getFechaVersion();?></td>

								<?php 

								if($sevri->getActivo()==1){
								 echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-danger\" type=\"button\" onclick=\"paginaModificarSevri('".$sevri->getIdSevri()."') \"><span class='glyphicon glyphicon-pencil'></span> Modificar</button></td>";
								 echo 	"<td style=\"text-align:center;\"><button class=\"btn btn-danger\" type=\"button\" onclick=\"confirmarEliminacion('".$sevri->getIdSevri()."') \"><span class='glyphicon glyphicon-pencil'></span> Eliminar</button></td>";
								}else{
								 echo "<td style=\"text-align:center;\"><button class=\"btn btn-danger\" type=\"button\"><span class='glyphicon glyphicon-pencil'></span>Registros</button></td>";
								}
								?>
								
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
				<input type="hidden" id="idSevri" name="idSevri">
			</div>
			
	</body>
</html>