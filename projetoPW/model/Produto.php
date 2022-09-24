<?php   
    require_once("../router.php");

    class Produto{
        private $codProduto, $nomeProduto, $precoProduto, $categoria;

        public function construct_min($nomeProduto, $precoProduto, $categoria){
            $this->nomeProduto = $nomeProduto;
            $this->precoProduto = $precoProduto;
            $this->categoria = $categoria;
        }

        public function contruct_full($codProduto, $nomeProduto, $precoProduto, $categoria){
            $this->codProduto = $codProduto;
            $this->construct_min($nomeProduto, $precoProduto, $categoria);
        }

        public function setCodProduto($codProduto){$this->codProduto = $codProduto;}
        public function getCodProduto(){return $this->codProduto;}

        public function setNomeProduto($nomeProduto){$this->nomeProduto = $nomeProduto;}
        public function getNomeProduto(){return $this->nomeProduto;}

        public function setPrecoProduto($precoProduto){$this->precoProduto = $precoProduto;}
        public function getPrecoProduto(){return $this->precoProduto;}
        
        // categoria -> Categoria OBJ
        public function setCategoria($categoria){$this->categoria = $categoria;}
        public function getCategoria() : Categoria {return $this->categoria;}
    }
?>
