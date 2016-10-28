<?php

  class dSevri {

  	private $mfechaVersion;
  	private $mnombreVersion;
    private $mEstaActivo;
    private $idSevri;

  	function dSevri(){
  	}

  	public function getFechaVersion(){
  		return $this->mfechaVersion;
  	}
  	public function setFechaVersion($pfecha){
  		$this->mfechaVersion = $pfecha;
  	}
  	public function getNombreVersion(){
  		return $this->mnombreVersion;
  	}
  	public function setNombreVersion($pnombre){
  		$this->mnombreVersion = $pnombre;
  	}
    public function getActivo(){
      return $this->mEstaActivo;
    }
    public function setActivo($pactivo){
      $this->mEstaActivo = $pactivo;
    }
    public function getIdSevri(){
      return $this->idSevri;
    }
    public function setIdSevri($id){
      $this->idSevri = $id;
    }

  }
?>