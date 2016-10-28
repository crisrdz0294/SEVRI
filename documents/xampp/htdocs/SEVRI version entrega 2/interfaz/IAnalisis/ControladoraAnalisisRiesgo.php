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
	
		<a href="javascript:cargarPagina('../../interfaz/IAnalisis/IAnalisisRiesgo.php')">Crear Analisis</a> <br>
		<a href="javascript:cargarPagina('../../interfaz/IAnalisis/IMostrarAnalisisRiesgo.php')">Mostrar Analaisis</a> <br>
		<hr>
		<div id="contenedor">
			<script>
				window.onload = cargarPagina('../../interfaz/IAnalisis/IMostrarAnalisisRiesgo.php');
			</script>
		</div>
		
		<div id="mRespuesta">
		</div>
	
	
</body>
</html>