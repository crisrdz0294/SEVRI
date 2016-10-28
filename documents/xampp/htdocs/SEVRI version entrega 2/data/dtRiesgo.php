<?php 

	include ("dtConnection.php");
	
	class dtRiesgo {
		
		function dtRiesgo(){}

		function insertarRiesgo($Riesgo){
			$con = new dtConnection;
			$prueba = $con->conect();

			$idDepartamento = $Riesgo->getIdDepartamento();
			$idCategoria = $Riesgo->getIdCategoria();
			$nombre = $Riesgo->getNombre();
			$descripcion = $Riesgo->getDescripcion();
			$montoEconomico = $Riesgo->getMontoEconomico();
			$estaActivo = $Riesgo->getEstaActivo();
			$causa = $Riesgo->getCausa();

			$result = $prueba->query("CALL insertarRiesgo($idDepartamento, $idCategoria, '$nombre', '$descripcion', $montoEconomico, $estaActivo, '$causa')");
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function modificarRiesgo($Riesgo){
			$con = new dtConnection;
			$prueba = $con->conect();

			$id = $Riesgo->getId();
			$idDepartamento = $Riesgo->getIdDepartamento();
			$idCategoria = $Riesgo->getIdCategoria();
			$nombre = $Riesgo->getNombre();
			$descripcion = $Riesgo->getDescripcion();
			$montoEconomico = $Riesgo->getMontoEconomico();
			$estaActivo = $Riesgo->getEstaActivo();
			$causa = $Riesgo->getCausa();

			$result = $prueba->query("CALL modificarRiesgo($id, $idDepartamento, $idCategoria, '$nombre', '$descripcion', $montoEconomico, $estaActivo, '$causa')");
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
		function getRiesgos(){
			include_once ('dtConnection.php');
			include("../../dominio/dRiesgo.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerRiesgos()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			
				$riesgo = new dRiesgo;
				$riesgo->setId($row[0]);
				$riesgo->setIdDepartamento($row[2]);
				$riesgo->setIdCategoria($row[3]);	
				$riesgo->setNombre($row[4]);
				$riesgo->setDescripcion($row[5]);
				$riesgo->setMontoEconomico($row[6]);
				$riesgo->setEstaActivo($row[7]);
				$riesgo->setCausa($row[8]);
				

				array_push($lista, $riesgo);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
		function getRiesgo($idRiesgo){
			include_once ('dtConnection.php');
			include("../../dominio/dRiesgo.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerRiesgo($idRiesgo)";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			
				$riesgo = new dRiesgo;
				$riesgo->setId($row[0]);
				$riesgo->setIdDepartamento($row[2]);
				$riesgo->setIdCategoria($row[3]);	
				$riesgo->setNombre($row[4]);
				$riesgo->setDescripcion($row[5]);
				$riesgo->setMontoEconomico($row[6]);
				$riesgo->setEstaActivo($row[7]);
				$riesgo->setCausa($row[8]);
				
				array_push($lista, $riesgo);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
		function eliminarRiesgo($idRiesgo){
			$con = new dtConnection;
			$prueba = $con->conect();

			$result = $prueba->query("CALL eliminarRiesgo($idRiesgo);");
			if (!$result){
				return false;
			} else {
				return true;
			}
		}
	}
?>