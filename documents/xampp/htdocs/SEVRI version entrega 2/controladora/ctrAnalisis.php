<?php 
	include("../dominio/dAnalisis.php");
	include("../data/dtAnalisis.php");
	class ctrAnalisis {
		
		function ctrAnalisis(){}

		function insertarAnalisis(){
	      	$analisis = new dAnalisis;

    		$analisis->setIdRiesgo($_POST['riesgo']);
			$analisis->setProbabilidad($_POST['probabilidad']);
			$analisis->setImpacto($_POST['impacto']);
			$analisis->setMedidaControl($_POST['medidaControl']);
			$analisis->setCalificacionMedida($_POST['CalificacionMedia']);

	      	$dataAnalisis = new dtAnalisis;
               
	      	if($dataAnalisis->insertarAnalisis($analisis) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha insertado el riesgo correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al insertar el riesgo.
					</div>
	      		';
	      	}
		}

		function actualizarAnalisis(){
			$analisis = new dAnalisis();

			$analisis->setIdRiesgo($_POST['riesgo']);
			$analisis->setProbabilidad($_POST['probabilidad']);
			$analisis->setImpacto($_POST['impacto']);
			$analisis->setMedidaControl($_POST['medidaControl']);
			$analisis->setCalificacionMedida($_POST['CalificacionMedia']);
	      	$id = $_POST['IdAnalisis'];
	      
	      	$dataAnalisis = new dtAnalisis();
               
	      	if($dataAnalisis->actualizarAnalisis($analisis,$id) == true){
	      		echo 
	      		'	
	      			<div class="alert alert-success">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Perfecto!</strong> Se ha actualizado el SEVRI correctamente.
					</div>
	      		';
	      	} else {
	      		echo 
	      		'	
	      			<div class="alert alert-danger">
	      				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Error!</strong> Se ha producido un error al actualizar el SEVRI.
					</div>
	      		';
	      	}
		}
	}

	$op = $_POST['opcion'];
	$control = new ctrAnalisis;
	if($op == 1){
	 	$control->insertarAnalisis();
	}
	if($op == 2){
	 	$control->actualizarAnalisis();
	}
?>