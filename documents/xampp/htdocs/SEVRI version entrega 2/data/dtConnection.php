<?php

	class dtConnection{
	  
	  	var $conexion;
	  
	    function dtConnection(){}
		 
		function getConexion(){
			return $this->conexion;
		}

		function conect() {
		    $con = mysqli_connect("localhost","root","","bdsevri");
		   
			if($con->connect_errno){
				echo "Falló la conexión a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
			}		    
			$this->conexion = $con;
			return $this->conexion;
		}
	}

?>