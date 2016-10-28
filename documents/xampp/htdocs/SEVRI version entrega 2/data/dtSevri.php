<?php 

	include_once ("dtConnection.php");
	
	class dtSevri {
		
		function dtSevri(){}

		function insertarSevri($Sevri){
			$con = new dtConnection;
			$conexion = $con->conect();
			$nombre = $Sevri->getNombreVersion();
			$fecha = $Sevri->getFechaVersion();

				$result = $conexion->query("CALL insertarSevri('$nombre','$fecha')");

				//mysql_close();

				if (!$result){
					return false;
				} else {
					return true;
				}
			
		}

		function getListaSevri(){
			include_once("../../dominio/dSevri.php");
			$con = new dtConnection;
			$conexion = $con->conect();

			$query = "CALL obtenerListaSevri()";
			$lista = array();
			$result = mysqli_query($conexion, $query);
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				$sevri = new dSevri();
					
				$sevri->setNombreVersion($row['NombreVersion']);
	    		$sevri->setFechaVersion($row['FechaCreacion']);
		      	$sevri->setActivo($row['EstaActivo']);
		      	$sevri->setIdSevri($row['Id']);
		      	
				array_push($lista, $sevri);
			}
			mysqli_free_result($result);
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return $lista;
			}
		}
		function getSevri($IdSevri){
			include("../../dominio/dSevri.php");
			$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL obtenerSevri('$IdSevri')";
			$sevri = new dSevri();
			$result = mysqli_query($conexion, $query);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			$sevri->setNombreVersion($row['NombreVersion']);
			$sevri->setFechaVersion($row['FechaCreacion']);
			$sevri->setIdSevri($row['Id']);
			

			mysqli_free_result($result);
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return $sevri;
			}
		}

		function actualizarSevri($sevri,$id){
		 	
		 	$con = new dtConnection();
			$conexion = $con->conect();
			
			$nombre =  $sevri->getNombreVersion();
			$fecha =  $sevri->getFechaVersion();
			$query = "CALL actualizarSevri('$id','$nombre','$fecha')";
			$result = mysqli_query($conexion, $query);
			

			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return true;
			}
		}

		function eliminarSevri($id){
		 	
		 	$con = new dtConnection();
			$conexion = $con->conect();
			$query = "CALL eliminarSevri('$id')";
			$result = mysqli_query($conexion, $query);
			
			mysqli_close($conexion);

			if (!$result){
				return false;
			} else {
				return true;
			}
		}
	}	


?>