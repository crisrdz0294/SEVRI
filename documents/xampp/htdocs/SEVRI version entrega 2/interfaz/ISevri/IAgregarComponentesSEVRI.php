<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar componentes</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css">
	<script lang="JavaScript" src="../../js/jQuery.js"></script>
	<script lang="JavaScript" src="../../js/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
	<script lang="JavaScript" src="../../js/jsSevri.js"></script>
</head>
<body>

	<?php 
	    include ("../../controladora/ctrDatosSevri.php") ;
		$ctrDatos = new ctrDatosSevri;
		$listaParametros = $ctrDatos->obtenerParametros();
		$listaCategorias = $ctrDatos->obtenerCategorias();
		$listaDepartamentos = $ctrDatos->obtenerDepartamentos();
	?>

	<div class="container">
		<form id="agregarParametrosSevri" method="Post" role="form">

			<div class="checkbox">
				<label for="">
					<input type="checkbox" id="checkProbabilidad" onclick="encontrarSeleccionado('checkProbabilidad')"> Parametros Probabilidad
				</label>
			</div>

			<div class="checkbox">
				<label for="">
					<input type="checkbox" id="checkImpacto" onclick="encontrarSeleccionado('checkImpacto')"> Parametros Impacto
				</label>
			</div>

			<div class="checkbox">
				<label for="">
					<input type="checkbox" id="checkCalificacion" onclick="encontrarSeleccionado('checkCalificacion')"> Parametros Calificacion Medida
				</label>
			</div>

			<div class="checkbox">
				<label for="">
					<input type="checkbox" id="checkCategorias" onclick="encontrarSeleccionado('checkCategorias')"> Categorias
				</label>
			</div>
			
			<div class="checkbox">
				<label for="">
					<input type="checkbox" id="checkDepartamentos" onclick="encontrarSeleccionado('checkDepartamentos')"> Departamentos
				</label>
			</div>

			<div class="form-group" id="divProbabilidad" style="display: none">
				<label for="Parametros Probabilidad">Parametros de Probabilidad</label>
				<select name="probabilidadOrigen" id="probabilidadOrigen" multiple size="4">
					<?php
						foreach ($listaParametros as $parametro) {
							if (strcmp ($parametro->getNombreParametro() , "Probabilidad" ) == 0) {
								echo "<option value=".$parametro->getIdParametro().">".$parametro->getValorParametro()."</option>";
							}
						} 
					?>
				</select>
				<label for="lProbabilidadSeleccionada">Parametros de Probabilidad Seleccionados</label>
				<input type="button"  onclick="incluirExcluirElementos('probabilidadOrigen','probabilidadDestino')" value=" > ">
				<input type="button" onclick="incluirExcluirElementos('probabilidadDestino','probabilidadOrigen')" value=" < ">
				<select name="probabilidadDestino[]" id="probabilidadDestino" multiple size="4"></select>
			</div>

			<div class="form-group" id="divImpacto" style="display: none">
				<label for="lParametrosImpacto">Parametros de impacto</label>
				<select name="impactoOrigen" id="impactoOrigen" multiple size="4">
					<?php
						foreach ($listaParametros as $parametro) {
							if (strcmp ($parametro->getNombreParametro() , "Impacto" ) == 0) {
								echo "<option value=".$parametro->getIdParametro().">".$parametro->getValorParametro()."</option>";
							}
						} 
					?>
				</select>
				<label for="lImpactoSeleccionado">Parametros de Impacto Seleccionados</label>
				<input type="button"  onclick="incluirExcluirElementos('impactoOrigen','impactoDestino')" value=" > ">
				<input type="button" onclick="incluirExcluirElementos('impactoDestino','impactoOrigen')" value=" < ">
				<select name="impactoDestino[]" id="impactoDestino" multiple size="4"></select>
			</div>

			<div class="form-group" id="divCalificacion" style="display: none">
				<label for="lParametrosCalificacion">Parametros de Calificacion</label>
				<select name="calificacionOrigen" id="calificacionOrigen" multiple size="4">
					<?php
						foreach ($listaParametros as $parametro) {
							if (strcmp ($parametro->getNombreParametro() , "Calificacion" ) == 0) {
								echo "<option value=".$parametro->getIdParametro().">".$parametro->getValorParametro()."</option>";
							}
						} 
					?>
				</select>
				<label for="lCalificacionSeleccionada">Parametros de Calificacion Seleccionados</label>
				<input type="button"  onclick="incluirExcluirElementos('calificacionOrigen','calificacionDestino')" value=" > ">
				<input type="button" onclick="incluirExcluirElementos('calificacionDestino','calificacionOrigen')" value=" < ">
				<select name="calificacionDestino[]" id="calificacionDestino" multiple size="4"></select>
			</div>
			

			<div class="form-group" id="divCategorias" style="display: none">
				<label for="lCategorias">Categorias</label>
				<select name="categorias" id="categoriasOrigen" multiple size="4">
					<?php
						foreach ($listaCategorias as $categoria) {
							echo "<option value=".$categoria->getIdCategoria().">".$categoria->getNombreCategoria()."</option>";
						} 
						?>
				</select>
				<label for="lCategoriasDestino">Categorias Seleccionadas</label>
				<input type="button"  onclick="incluirExcluirElementos('categoriasOrigen','categoriasDestino')" value=" > ">
				<input type="button" onclick="incluirExcluirElementos('categoriasDestino','categoriasOrigen')" value=" < ">
				<select name="categoriasDestino[]" id="categoriasDestino" multiple size="4"></select>
				
			</div>

			<div class="form-group" id="divDepartamentos" style="display: none">
				<label for="lDepartamentosOrigen">Departamentos</label>
				<select name="departamentosOrigen" id="departamentosOrigen" multiple size="4">
					<?php
						foreach ($listaDepartamentos as $departamento) {
							echo "<option value=".$departamento->getIdDepartamento().">".$departamento->getNombreDepartamento()."</option>";
						} 
					?>
				</select>
				<label for="lDepartamentosDestino">Departamentos Seleccionados</label>
				<input type="button"  onclick="incluirExcluirElementos('departamentosOrigen','departamentosDestino')" value=" > ">
				<input type="button" onclick="incluirExcluirElementos('departamentosDestino','departamentosOrigen')" value=" < ">
				<select name="departamentosDestino[]" id="departamentosDestino" multiple size="4"></select>
			</div>
			<input type="button" value="Agregar" onclick="agregarParametros()">
		</form>
	</div>

</body>
</html>