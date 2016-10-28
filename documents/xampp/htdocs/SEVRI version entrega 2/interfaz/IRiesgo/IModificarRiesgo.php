<!DOCTYPE html>
<html lang="en">
<head>
	<title>Modificar Riesgo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<script lang="JavaScript" src="../../js/jsRiesgo.js"></script>
</head>
<body>
	<?php
		$idRiesgo = $_GET['idRiesgo'];
		include ("../../data/dtRiesgo.php");
		//include ("../../dominio/dRiesgo.php");
		$control = new dtRiesgo;
		$lista = $control->getRiesgo($idRiesgo);
		foreach ($lista as $riesgo) {
			$id = $riesgo->getId();
			$idDepartamento = $riesgo->getIdDepartamento();
			$nombre = $riesgo->getNombre();
			$descripcion = $riesgo->getDescripcion();
			$monto = $riesgo->getMontoEconomico();
			$causa = $riesgo->getCausa();
		}

		include ("../../controladora/ctrDatosSevri.php");
		$control1 = new ctrDatosSevri;	
		$listaC =$control1->obtenerCategorias();	 
	?>
	<div class="general">
		<div class="formulario">
			<form id="IModificarRiesgo" method="Post" role="form">
				<div class="contenedor">
						<label>Nombre</label><br>
						<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" placeholder="<?php echo $nombre;?>"><br><br>
						<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
						<input type="hidden" name="idDepartamento" id="idDepartamento" value="<?php echo $idDepartamento;?>">
						<label>Descripcion</label><br>
						<textarea rows="5" name="descripcion" id="descripcion" value="<?php echo $descripcion;?>" placeholder="<?php echo $descripcion;?>"> <?php echo $descripcion;?> </textarea><br><br>
						<label>Monto Economico</label><br>
						<input type="text" name="monto" id="monto" value="<?php echo $monto;?>" placeholder="<?php echo $monto;?>"><br>
						<label>Categoria</label><br>
						<select id="categoria" name="categoria">
						<?php
							foreach($listaC as $categoria) { 
								echo "<option value=".$categoria->getIdCategoria()." >".$categoria->getNombreCategoria()."</option>";
							}
						?>
						</select><br><br>
						<label> Estado </label><br>
						<select id="estado" name="estado"> 
							<option value="1">Activo</option>
							<option value="0">Inactivo</option>
						</select><br><br>
						<label>Causa</label><br>
						<textarea rows="5" name="causa" id="causa" value="<?php echo $causa;?>" placeholder="<?php echo $causa;?>"><?php echo $descripcion;?></textarea><br><br>
						<input type="button" value="Modificar" onclick="modificarRiesgo()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>