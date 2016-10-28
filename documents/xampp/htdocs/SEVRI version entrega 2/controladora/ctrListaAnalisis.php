<?php 
		include ('../../data/dtAnalisis.php');
	class ctrListaAnalisis{

		function ctrListaAnalisis(){}

		function obtenerListaAnalisis(){

			$dataAnalisis = new dtAnalisis();
			$lista = $dataAnalisis->getListaAnalisis();

			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}

		function obtenerAnalisis($idAnalisis){
			$dataAnalisis = new dtAnalisis();
			$analisis = $dataAnalisis->getAnalisis($idAnalisis);
			if(!$analisis){
				return false;
			}else{
				return $analisis;
			}
		}
	}

 ?>