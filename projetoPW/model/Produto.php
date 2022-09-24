<?php   

    class Produto{
        private $codProduto, $nomeProduto, $precoProduto, $codCategoria;

        public function construct($nomeProduto, $precoProduto){
            $this->nomeProduto = $nomeProduto;
            $this->precoProduto = $precoProduto;
        }

        public function implement($codProduto, $nomeProduto, $precoProduto){
            $this->codProduto = $codProduto;
            $this->nomeProduto = $nomeProduto;
            $this->precoProduto = $precoProduto;
        }

        public function setCodProduto($codProduto){
            $this->codProduto = $codProduto;
        }

        public function getCodProduto(){
            return $this->codProduto;
        }

        public function setNomeProduto($nomeProduto){
            $this->nomeProduto = $nomeProduto;
        }

        public function getNomeProduto(){
            return $this->nomeProduto;
        }

        public function setPrecoProduto($precoProduto){
            $this->precoProduto = $precoProduto;
        }

        public function getPrecoProduto(){
            return $this->precoProduto;
        }
        
        public function setCodCategoria($codCategoria){
            $this->codCategoria = $codCategoria;
        }

        public function getCodCategoria(){
            return $this->codCategoria;
        }
    }
?>
