<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar SEVRI</title>
</head>
<body>
	<?php 
	   include('../../controladora/ctrListaSevri.php');
	   $idSevri = $_GET['IdSevri'];
	   echo "$idSevri";
	   $control = new ctrListaSevri();
	   $sevri = $control->obtenerSevri($idSevri);

	   $nombre = $sevri->getNombreVersion();
	   $fecha = $sevri->getFechaVersion();
	   $id = $sevri->getIdSevri();
       echo "$nombre";
	 ?>

	 <h1>Modificar SEVRI</h1>

	 <form id="actualizarSevri" method="POST">
	 	<table >
	 		<tr>
	 			<td><label for="nombre">Nombre SEVRI</label></td>
	 			<td><input type="text" id="nombre" name="nombre" placeholder="<?php echo "Dato:"."$nombre"; ?>" value="<?php echo "$nombre"; ?>"></label></td>
	 		</tr>
	 		<tr>
	 			<td><label for="fecha"> Fecha Creacion</label></td>
	 			<td><input type="date" id="fecha" name="fecha" placeholder="<?php echo "Dato:"."$fecha"; ?>" value="<?php echo "$fecha"; ?>"></label></td>
	 		</tr>
	 		<tr>	
	 			<td>
	 				<input type="button" value="Actualizar" onclick="confirmaActualizar()">
	 			</td>
	 		</tr>
	 	</table>
	 	<input type="number" id="id" name="opcion" value="<?php echo "$id"; ?>" style="display:none">
	 	<div class="" id="confirmarActualizar" style="display: none">
			<div class="" id= "mensaje1" style="display: none"></div>

			    <div class="" >
				<input type="submit" class="btn btn-danger" id="actualizar" value="Confirmar" onclick="actualizarSevri()">
				<button class="btn btn-danger" type="button" id="cancelar" onclick="cancelarActualizar()">
					<span class='glyphicon glyphicon-pencil'></span> Cancelar
				</button>
			</div>
		</div>
	 </form>
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