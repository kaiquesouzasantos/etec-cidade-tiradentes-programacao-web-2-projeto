<?php
    require_once("../router.php");

    class ItemVenda{
        private $codItemVenda, $venda, $produto, $qtdItemVenda, $subtotalItemVenda;
        
        public function getCodItemVenda(){return $this->codItemVenda;}
        public function setCodItemVenda($codItemVenda){$this->codItemVenda = $codItemVenda;}
        
        // venda -> Venda OBJ
        public function getVenda() : Venda {return $this->venda;}
        public function setVenda($venda){$this->venda = $venda;}
        
        // produto -> Produto OBJ
        public function getProduto() : Produto {return $this->produto;}
        public function setProduto($produto){$this->produto = $produto;}

        public function getQtdItemVenda(){return $this->qtdItemVenda;}
        public function setQtdItemVenda($qtdItemVenda){$this->qtdItemVenda = $qtdItemVenda;}

        public function getSubtotalItemVenda(){return $this->subtotalItemVenda;}
        public function setSubtotalItemVenda(){
            $this->subtotalItemVenda = $this->getProduto()->getPrecoProduto() * $this->qtdItemVenda;
        }
    }
?>
