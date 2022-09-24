<?php
    require_once("../../router.php");

    class ProdutoDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarProduto($nome, $preco, $codCategoria){
            $produto = new Produto();
            $produto->construct_min(
                $nome, $preco, CategoriaDAO::retornaCategoria($codCategoria)
            );

            $insertProduto = "INSERT INTO tbProduto(nomeProduto, precoProduto, codCategoria) 
                                VALUES (:nome, :preco, :categoria)";
            
            $stmt = self::getConexao()->prepare($insertProduto);
        
            $stmt->bindValue(":nome", $produto->getNomeProduto());
            $stmt->bindValue(":preco", $produto->getPrecoProduto());
            $stmt->bindValue(":categoria", $produto->getCategoria()->getCodCategoria());

            $stmt->execute();

            return true;
        }

        public static function retornaProduto($codProduto) : Produto {
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codProduto}");
            
            $produto = new Produto();
            $produto->contruct_full(
                $stmt['codProduto'], $stmt['nomeProduto'], 
                $stmt['precoProduto'], CategoriaDAO::retornaCategoria($stmt['codCategoria'])
            );

            return $produto;
        }

        public static function listaPrduto() : array {
            $produtos = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto")->fetchAll();

            foreach($stmt as $produto){
                $objeto = new Produto();
                $objeto->contruct_full(
                    $produto['codProduto'], $produto['nomeProduto'], 
                    $produto['precoProduto'], CategoriaDAO::retornaCategoria($produto['codCategoria'])
                );
                
                array_push($produtos, $objeto);
            }

            return $produtos;
        }
    }
?>