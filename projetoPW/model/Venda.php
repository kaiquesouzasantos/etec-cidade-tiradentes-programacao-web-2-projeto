<?php
    class Venda{
        private $codvenda, $dataVenda, $valorTotalVenda, $statusVenda, $codCliente;

        public function getCodVenda(){
            return $this->codVenda;
        }

        public function setCodVenda($codVenda){
            $this->codvenda = $codVenda;
        }
        
        public function getDataVenda(){
            return $this->dataVenda;
        }

        public function setDataVenda($dataVenda){
            $this->dataVenda = $dataVenda;
        }

        public function getValorTotalVenda(){
            return $this->valorTotalVenda;
        }

        public function setValorTotalVends($valorTotalVenda){
            $this->valorTotalVenda = $valorTotalVenda;
        }

        public function getStatusVenda(){
            return $this->statusVenda;
        }
        
        public function setStatusVenda($statusVenda){
            $this->statusVenda = $statusVenda;
        }

        public function getCodCliente(){
            return $this->codCliente;
        }

        public function setCodCliente($codCliente){
            $this->codCliente = $codCliente;
        }
    }
?>
