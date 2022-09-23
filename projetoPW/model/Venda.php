<?php

    require_once 'model/Cliente.php';

    class Venda{

        private $id;
        private $dataVenda;
        private $valorTotal;
        private $status;
        private $idCliente;

        public function __construct(){
            $this-> idCliente = new Cliente();
        }

        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;

        }
        
        public function getDataVenda(){
            return $this->dataVenda;
        }

        public function setDataVenda($dataVenda){
            $this->dataVenda = $dataVenda;
        }

        public function getValorTotal(){
            return $this->valorTotal;
        }

        public function setValorTotal($valorTotal){
            $this->valorTotal = $valorTotal;

        }

        public function getStatus(){
            return $this->status;
        }
        
        public function setStatus($status): self{
            $this->status = $status;

        }

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;

        }
    }
?>