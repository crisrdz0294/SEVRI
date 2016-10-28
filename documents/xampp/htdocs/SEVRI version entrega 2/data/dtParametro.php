<?php 
	
	class dtParametro {
		
		function dtParametro(){}

		function getParametros(){
			include_once ('dtConnection.php');
			include_once("../../dominio/dParametro.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerParametros()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			
				$parametro = new dParametro;
				$parametro->setValorParametro($row[2]);
				$parametro->setDescriptorParametro($row[3]);	
				$parametro->setDescripcionParametro($row[4]);
				$aux = $row[1];
				if($aux == 1){
					$parametro->setNombreParametro("Probabilidad");
				}						
				else if($aux == 2){
					$parametro->setNombreParametro("Impacto");
				}
				else{
					$parametro->setNombreParametro("Calificacion");
				}
				$parametro->setIdParametro($row[0]);

				array_push($lista, $parametro);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}

		function getParametro($IdParametro){
			include_once("../../dominio/dParametro.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerParametroPorId('$IdParametro')";
			$parametro = new dParametro();
			$result = mysqli_query($conexion, $query);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			$parametro->setIdParametro($row['Id']);
			$parametro->setValorParametro($row['Valor']);
			if($parametro->getValorParametro() == 1){
					$parametro->setNombreParametro("Probabilidad");
				}						
				else if($parametro->getValorParametro() == 2){
					$parametro->setNombreParametro("Impacto");
				}
				else{
					$parametro->setNombreParametro("Calificacion");
				}
			$parametro->setDescriptorParametro($row['Descriptor']);
			$parametro->setDescripcionParametro($row['Descripcion']);

			mysqli_free_result($result);
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return $parametro;
			}
		}

		
	}	


?>