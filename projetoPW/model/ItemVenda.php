<?php

    class ItemVenda{
        
        private $codItemvenda, $codVenda, $codProduto, $qtdItemvenda, $subtotalItemVenda;
        
        public function getCodItemvenda(){
            return $this->codItemvenda;
        }

        public function setCodItemvenda($codItemvenda){
            $this->codItemvenda = $codItemvenda;
        }
        
        public function getCodVenda(){
            return $this->codVenda;
        }

        public function setCodVenda($codVenda){
            $this->codVenda = $codVenda;
        }
        
        public function getCodProduto(){
            return $this->codProduto;
        }

        public function setCodProduto($codProduto){
            $this->codProduto = $codProduto;
        }

        public function getQtdItemvenda(){
            return $this->qtdItemvenda;
        }

        public function setQtdItemvenda($qtdItemvenda){
            $this->qtdItemvenda = $qtdItemvenda;
        }

        public function getSubtotalItemVenda(){
            return $this->subtotalItemVenda;
        }

        public function setSubtotalItemVenda($subtotalItemVenda){
            $this->subtotalItemVenda = $subtotalItemVenda;
        }
    }
?>
