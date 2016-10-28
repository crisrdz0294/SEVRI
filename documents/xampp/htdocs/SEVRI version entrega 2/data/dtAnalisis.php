<?php 

	
	class dtAnalisis {
		
		function dtAnalisis(){}

		function insertarAnalisis($analisis){
			include_once ('dtConnection.php');
			include("../../dominio/dAnalisis.php");

			$con = new dtConnection;
			$prueba = $con->conect();

			$idRiesgo = $analisis->getIdRiesgo();
			$probabilidad = $analisis->getProbabilidad();
			$impacto = $analisis->getImpacto();
			$medidaControl = $analisis->getMedidaControl();
			$calificacionMedida = $analisis->getCalificacionMedida();

				$result = $prueba->query("CALL insertarAnalisis($idRiesgo, $probabilidad, $impacto, 0, '$medidaControl', $calificacionMedida)");
				if (!$result){
					return false;
				} else {
					return true;
				}
			
		}

		function getListaAnalisis(){
			include_once ('dtConnection.php');
			include_once("../../dominio/dAnalisis.php");
			$con = new dtConnection;
			$conexion = $con->conect();

			$query = "CALL obtenerListaAnalisis()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$analisis = new dAnalisis();

				$analisis->setId($row['Id']);
				$analisis->setIdRiesgo($row['IdRiesgo']);
	    		$analisis->setProbabilidad($row['Probabilidad']);
		      	$analisis->setImpacto($row['Impacto']);
		      	$analisis->setNivelRiesgo($row['NivelRiesgo']);
		      	$analisis->setMedidaControl($row['MedidaControl']);
		      	$analisis->setCalificacionMedida($row['CalificacionMedida']);
				array_push($lista, $analisis);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
	}	
?>