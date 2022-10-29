<?php
    class ProdutoDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarProduto($nome, $preco, $desc, $quantidade, $codCategoria, $imagem){
            $produto = new Produto();
            $produto->construct_min(
                $nome, $preco, $desc, $quantidade, CategoriaDAO::retornaCategoria($codCategoria), $imagem
            );

            try{
                $insertProduto = "CALL spInserirProduto(:nome, :preco, :descr, :quantidade, :categoria, :img, @p7)";
                $stmt = self::getConexao()->prepare($insertProduto);

                $stmt->bindValue(":nome", $produto->getNomeProduto());
                $stmt->bindValue(":preco", $produto->getPrecoProduto());
                $stmt->bindValue(":descr", $produto->getDescricaoProduto());
                $stmt->bindValue(":quantidade", $produto->getQuantidadeProduto());
                $stmt->bindValue(":categoria", $produto->getCategoria()->getCodCategoria());
                $stmt->bindValue(":img", $produto->getImgProduto());

                $stmt->execute();

                return true;
            } catch(Exception){
                return false;
            }
        }

        public static function retornaProduto($codProduto) : Produto {
            try{
                $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codProduto}");
            
                $produto = new Produto();
                $produto->construct_full(
                    $stmt['codProduto'], $stmt['nomeProduto'], 
                    $stmt['precoProduto'], $stmt['descProduto'], $stmt['qntdProduto'],
                    CategoriaDAO::retornaCategoria($stmt['codCategoria']), 
                    $stmt['fotoProduto']
                );
    
                return $produto;
            } catch(Exception){
                return false;
            }
        }

        public static function listaProduto() : array {
            $produtos = array();

            try{
                $stmt = self::getConexao()->query("SELECT * FROM tbProduto")->fetchAll();

                foreach($stmt as $produto){
                    $objeto = new Produto();
                    $objeto->construct_full(
                        $produto['codProduto'], $produto['nomeProduto'], 
                        $produto['precoProduto'], $produto['descProduto'], $produto['qntdProduto'],
                        CategoriaDAO::retornaCategoria($produto['codCategoria']),
                        $produto['fotoProduto']
                    );
                    
                    array_push($produtos, $objeto);
                }
            } catch(Exception){
                return false;
            }

            return $produtos;
        }
    }
?>