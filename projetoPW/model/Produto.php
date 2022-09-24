<?php   

    class Produto{
        private $codProduto, $nomeProduto, $preco, $codCategoria;

        public function construct($nomeProduto, $preco){
            $this->nomeProduto = $nomeProduto;
            $this->preco = $preco;
        }

        public function implement($codProduto, $nomeProduto, $preco){
            $this->codProduto = $codProduto;
            $this->nomeProduto = $nomeProduto;
            $this->preco = $preco;
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

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }
        
        public function setCodCategoria($codCategoria){
            $this->codCategoria = $codCategoria;
        }

        public function getCodCategoria(){
            return $this->codCategoria;
        }
    }
?>
