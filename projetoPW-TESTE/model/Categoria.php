<?php
    class Categoria{
        private $codCategoria, $nomeCategoria;

        public function construct_min($nomeCategoria){
            $this->nomeCategoria = $nomeCategoria;
        }

        public function construct_full($codCategoria, $nomeCategoria){
            $this->codCategoria = $codCategoria;
            $this->construct_min($nomeCategoria);
        }

        public function getCodCategoria(){return $this->codCategoria;}
        public function setCodCategoria($codCategoria){$this->codCategoria = $codCategoria;}

        public function getNomeCategoria(){return $this->nomeCategoria;}
        public function setNomeCategoria($nomeCategoria){$this->nomeCategoria = $nomeCategoria;}
    }
?>