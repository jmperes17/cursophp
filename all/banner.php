<?php

class Bluray(){

    private $codigo;
    private $titulo;
    private $estudio;
    private $anoLancamento;

function setCodigo($codigo) { 
    $this->codigo = $codigo; 
}

function getCodigo() {
     return $this->codigo; 
    }

function setTitulo($titulo) {
    
    $this->titulo = $titulo; 
}

function getTitulo() {
     return $this->titulo; 
    }

function setEstudio($estudio) {
    
    $this->estudio = $estudio; 
}

function getEstudio() {
     return $this->estudio; }

function setAnoLancamento($anoLancamento) {

     $this->anoLancamento = $anoLancamento; 
    }

function getAnoLancamento() {
     return $this->anoLancamento; 
    }




}

$b1 = new Banner()



?>