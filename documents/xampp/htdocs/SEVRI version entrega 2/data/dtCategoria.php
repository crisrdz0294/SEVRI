<?php 

	
	class dtCategoria {
		
		function dtCategoria(){}

		function getCategorias(){
			include_once ('dtConnection.php');
			include("../../dominio/dCategoria.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerCategorias(0)";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$categoria = new dCategoria;
					
				$categoria->setNombreCategoria($row['Nombre']);
				$categoria->setIdCategoria($row['Id']);	
				$categoria->setDescripcion($row['Descripcion']);						
				

				array_push($lista, $categoria);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}

		function insertarSevriCategoria($categoria){
			$con = new dtConnection;
			$prueba = $con->conect();
			$result = $prueba->query("CALL insertarSevriCategorias('$categoria')");

			//mysqli_close($prueba);

			if (!$result){
				return false;
			} else {
				return true;
			}
			
		}
		
	}	

?>