<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEVRI</title>
	<script src="../../js/jQuery.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../js/jsTablas.js"></script>
    <script type="text/javascript" src="../../js/jsSevri.js"></script>
</head>
<body>
	
			<a href="javascript:cargarPagina('../../interfaz/IRiesgo/IIdentificarRiesgo.php')">Identificar</a> <br>
		    <a href="javascript:cargarPagina('../../interfaz/IRiesgo/IListaModificarRiesgo.php')">Modificar riesgos identificados</a> <br>
		    <a href="javascript:cargarPagina('../../interfaz/IRiesgo/IEliminarRiesgo.php')">Eliminar riesgos identificados</a> <br>
		    <a href="javascript:cargarPagina('../../interfaz/IRiesgo/IListaRiesgo.php')">Mostrar riesgos identificados</a> <br>
		<hr>
		<div id="contenedor">
			<script>
				window.onload = cargarPagina('../../interfaz/IRiesgo/IListaModificarRiesgo.php');
			</script>
		</div>
		
		<div id="mRespuesta">
		</div>
	
	
</body>
</html>