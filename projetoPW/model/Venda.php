<?php
    class Venda{
        private $codvenda, $dataVenda, $valorTotal, $status, $codCliente;

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

        public function getValorTotal(){
            return $this->valorTotal;
        }

        public function setValorTotal($valorTotal){
            $this->valorTotal = $valorTotal;
        }

        public function getStatus(){
            return $this->status;
        }
        
        public function setStatus($status){
            $this->status = $status;
        }

        public function getCodCliente(){
            return $this->codCliente;
        }

        public function setCodCliente($codCliente){
            $this->codCliente = $codCliente;
        }
    }
?>
