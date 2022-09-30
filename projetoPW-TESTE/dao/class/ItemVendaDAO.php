<?php 
    require_once("../../router.php");

    class ItemVendaDAO{
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarItemVenda($codVenda, $codProduto, $qtdItemVenda){
            $itemVenda = new ItemVenda();
            $itemVenda->construct_min(
                VendaDAO::retornaVenda($codVenda), 
                ProdutoDAO::retornaProduto($codProduto), $qtdItemVenda
            );

            $insertItemVenda = "INSERT INTO tbItemVenda(codVenda, codProduto, qntdItemVenda, subTotalItemVenda) 
                                VALUES (:codVenda, :codProduto, :quantidade, :subtotal)";
            
            $stmt = self::getConexao()->prepare($insertItemVenda);
        
            $stmt->bindValue(":codVenda", $itemVenda->getVenda()->getCodVenda());
            $stmt->bindValue(":codProduto", $itemVenda->getProduto()->getCodProduto());
            $stmt->bindValue(":quantidade", $itemVenda->getQtdItemVenda());
            $stmt->bindValue(":subtotal", $itemVenda->getSubtotalItemVenda());

            $stmt->execute();

            return true;
        }

        public static function retornaItemVenda($codItemVenda) : ItemVenda {
            $stmt = self::getConexao()->query("SELECT * FROM tbItemVenda WHERE codItemvenda = ${codItemVenda}");
            
            $categoria = new ItemVenda();
            $categoria->construct_full(
                VendaDAO::retornaVenda($stmt['codItemvenda']), 
                ProdutoDAO::retornaProduto($stmt['codProduto']), 
                $stmt['qntdItemVenda'], $stmt['subTotalItemVenda']
            );

            return $categoria;
        }
    }
?>