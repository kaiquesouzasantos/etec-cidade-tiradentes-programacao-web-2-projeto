<?php
    require_once("../../router.php");

    class CategoriaDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCategoria($nome){
            $categoria = new Categoria();
            $categoria->construct_min($nome);

            $insertCategoria = "INSERT INTO tbCategoria(nomeCategoria) 
                                VALUES (:nome)";
            
            $stmt = self::getConexao()->prepare($insertCategoria);
        
            $stmt->bindValue(":nome", $categoria->getNomeCategoria());

            $stmt->execute();

            return true;
        }

        public static function retornaCategoria($codCategoria) : Categoria {
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codCategoria}");
            
            $categoria = new Categoria();
            $categoria->construct_full($stmt['codCategoria'], $stmt['nomeCategoria']);

            return $categoria;
        }

        public static function listaCategoria() : array {
            $categorias = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbCategoria")->fetchAll();

            foreach($stmt as $categoria){
                $objeto = new Categoria();
                $objeto->construct_full(
                    $categoria['codCategoria'], $categoria['nomeCategoria']
                );
                
                array_push($categorias, $objeto);
            }

            return $categorias;
        }
    }
?>