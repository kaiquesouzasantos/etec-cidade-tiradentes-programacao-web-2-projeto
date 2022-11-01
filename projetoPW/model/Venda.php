<?php
    class Venda{
        private $codVenda, $dataVenda, $valorTotalVenda, $statusVenda, $cliente;

        public function construct_min($cliente){
            $this->cliente = $cliente;
        }

        public function construct_full($codVenda, $dataVenda, $valorTotalVenda, $statusVenda, $cliente){
            $this->codVenda = $codVenda;
            $this->dataVenda = $dataVenda;
            $this->valorTotalVenda = $valorTotalVenda;
            $this->statusVenda = $statusVenda;
            $this->cliente = $cliente;
        }

        public function getCodVenda(){return $this->codVenda;}
        public function setCodVenda($codVenda){$this->codvenda = $codVenda;}
        
        public function getDataVenda(){return $this->dataVenda;}
        public function setDataVenda($dataVenda){$this->dataVenda = $dataVenda;}

        public function getValorTotalVenda(){return $this->valorTotalVenda;}
        public function setValorTotalVends($valorTotalVenda){$this->valorTotalVenda = $valorTotalVenda;}

        public function getStatusVenda(){return $this->statusVenda;}
        public function setStatusVenda($statusVenda){$this->statusVenda = $statusVenda;}

        // cliente -> Cliente OBJ
        public function getCliente() : Cliente {return $this->cliente;}
        public function setCliente($cliente) {$this->cliente = $cliente;}
    }
?>
