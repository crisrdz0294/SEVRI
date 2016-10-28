<?php 
		include_once('../../data/dtParametro.php');
	class ctrListaParametro{

		function ctrListaParametro(){}

		function obtenerListaParametro(){

			$dataParametro = new dtParametro();
			$lista = $dataParametro->getParametros();

			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		function obtenerParametro($idParametro){
			$dataParametro = new dtParametro();
			$parametro = $dataParametro->getParametro($idParametro);
			if(!$parametro){
				return false;
			}else{
				return $parametro;
			}
		}
	}

 ?>