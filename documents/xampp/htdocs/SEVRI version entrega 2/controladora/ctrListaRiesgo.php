<?php 
		include ('../../data/dtRiesgo.php');
	class ctrListaRiesgo{

		function ctrListaRiesgo(){}

		function obtenerListaRiesgo(){

			$dataRiesgo = new dtRiesgo();
			$lista = $dataRiesgo->getListaRiesgo();

			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		function obtenerRiesgo($idRiesgo){
			$dataRiesgo = new dtRiesgo();
			$riesgo = $dataRiesgo->getRiesgo($idRiesgo);
			if(!$riesgo){
				return false;
			}else{
				return $riesgo;
			}
		}
	}

 ?>