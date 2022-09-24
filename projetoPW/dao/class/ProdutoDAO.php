<?php
    require_once("../../router.php");

    class ProdutoDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarProduto($nome, $preco, $categoria){
            $produto = new Produto();
            $produto->construct($nome, $preco, $categoria);

            $insertProduto = "INSERT INTO tbProduto(nomeProduto, precoProduto, codCategoria) 
                                VALUES (:nome, :preco, :categoria)";
            
            $stmt = self::getConexao()->prepare($insertProduto);
        
            $stmt->bindValue(":nome", $produto->getNomeProduto());
            $stmt->bindValue(":preco", $produto->getPreco());
            // $stmt->bindValue(":categoria", $produto->());

            $stmt->execute();

            return true;
        }

        public static function retornaPrduto($codProduto){
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codProduto}");
            
            $produto = new Produto();
            $produto->implement(
                $stmt['codProduto'], $stmt['nomeProduto'], 
                $stmt['precoProduto']
            );

            return $produto;
        }

        public static function listaPrduto() : array {
            $produtos = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto")->fetchAll();

            foreach($stmt as $produto){
                $objeto = new Produto();
                $objeto->implement(
                    $produto['codProduto'], $produto['nomeProduto'], 
                    $produto['precoProduto']
                );
                
                array_push($produtos, $objeto);
            }

            return $produtos;
        }
    }
?>