<?php 
		include ('../../data/dtSevri.php');
	class ctrListaSevri{

		function ctrListaSevri(){}

		function obtenerListaSevri(){

			$dataSevri = new dtSevri();
			$lista = $dataSevri->getListaSevri();

			if(!$lista){
				return false;
			}else{
				return $lista;
			}
		}
		function obtenerSevri($idSevri){
			$dataSevri = new dtSevri();
			$sevri = $dataSevri->getSevri($idSevri);
			if(!$sevri){
				return false;
			}else{
				return $sevri;
			}
		}
	}

 ?>