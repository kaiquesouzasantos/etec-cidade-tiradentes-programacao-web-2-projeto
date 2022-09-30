<?php
    class ProdutoDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarProduto($nome, $preco, $desc, $codCategoria, $imagem){
            $produto = new Produto();
            $produto->construct_min(
                $nome, $preco, $desc, CategoriaDAO::retornaCategoria($codCategoria), $imagem
            );

            $insertProduto = "INSERT INTO tbProduto(nomeProduto, precoProduto, descProduto, codCategoria, fotoProduto) 
                                VALUES (:nome, :preco, :descr, :categoria, :img)";
            
            $stmt = self::getConexao()->prepare($insertProduto);
        
            $stmt->bindValue(":nome", $produto->getNomeProduto());
            $stmt->bindValue(":preco", $produto->getPrecoProduto());
            $stmt->bindValue(":descr", $produto->getDescricaoProduto());
            $stmt->bindValue(":categoria", $produto->getCategoria()->getCodCategoria());
            $stmt->bindValue(":img", $produto->getImgProduto());

            $stmt->execute();

            return true;
        }

        public static function retornaProduto($codProduto) : Produto {
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codProduto}");
            
            $produto = new Produto();
            $produto->construct_full(
                $stmt['codProduto'], $stmt['nomeProduto'], 
                $stmt['precoProduto'], $stmt['descProduto'], 
                CategoriaDAO::retornaCategoria($stmt['codCategoria']), 
                $stmt['imgProduto']
            );

            return $produto;
        }

        public static function listaProduto() : array {
            $produtos = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto")->fetchAll();

            foreach($stmt as $produto){
                $objeto = new Produto();
                $objeto->construct_full(
                    $produto['codProduto'], $produto['nomeProduto'], 
                    $produto['precoProduto'], $produto['descProduto'],
                    CategoriaDAO::retornaCategoria($produto['codCategoria']),
                    $produto['imgProduto']
                );
                
                array_push($produtos, $objeto);
            }

            return $produtos;
        }
    }
?>