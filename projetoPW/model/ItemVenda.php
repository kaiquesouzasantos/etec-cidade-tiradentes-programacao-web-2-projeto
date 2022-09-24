<?php

    class ItemVenda{
        private $codItemvenda, $qtdItemvenda, $subtotalItemVenda;
        
        public function getCodItemvenda(){
            return $this->codItemvenda;
        }

        public function setCodItemvenda($codItemvenda){
            $this->codItemvenda = $codItemvenda;
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
