<?php

    class ItemVenda{
        private $id, $quantidade, $subTotal;
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        public function getSubTotal(){
            return $this->subTotal;
        }

        public function setSubTotal($subTotal){
            $this->subTotal = $subTotal;
        }
    }
?>