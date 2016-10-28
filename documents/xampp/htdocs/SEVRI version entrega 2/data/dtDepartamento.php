<?php 

	
	class dtDepartamento {
		
		function dtDepartamento(){}

		function getDepartamentos(){
			include_once ('dtConnection.php');
			include("../../dominio/dDepartamento.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerDepartamentos()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$departamento = new dDepartamento;
					
				$departamento->setCodigoDepartamento($row['Codigo']);
				$departamento->setNombreDepartamento($row['Nombre']);	
				$departamento->setFechaCreacion($row['FechaCreacion']);	
				$departamento->setIdDepartamento($row['Id']);						
				

				array_push($lista, $departamento);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);
			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}

		function insertarSevriDepartamento($departamento){
			$con = new dtConnection;
			$prueba = $con->conect();
			$result = $prueba->query("CALL insertarSevriDepartamentos('$departamento')");

			//mysqli_close($prueba);

			if (!$result){
				return false;
			} else {
				return true;
			}
			
		}

	}	

?>