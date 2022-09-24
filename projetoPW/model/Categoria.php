<?php
    class Categoria{
        private $codCategoria, $nomeCategoria;

        public function construct($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }

        public function implement($codCategoria, $nomeCategoria){
            $this->codCategoria = $codCategoria;
            $this->nomeCategoria = $nomeCategoria;
        }

        public function getCodCategoria(){
            return $this->codCategoria;
        }
        public function getNomeCategoria(){
            return $this->nomeCategoria;
        }
        public function setCodCategoria($codCategoria){
            $this->codCategoria = $codCategoria;
        }
        public function setNomeCategoria($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }
    }
?>