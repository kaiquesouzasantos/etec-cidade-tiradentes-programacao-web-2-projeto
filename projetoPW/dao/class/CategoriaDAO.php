<?php
    require_once("../../router.php");

    class CategoriaDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCategoria($nome){
            $categoria = new Categoria();
            $categoria->construct($nome);

            $insertCategoria = "INSERT INTO tbCategoria(nomeCategoria) 
                                VALUES (:nome)";
            
            $stmt = self::getConexao()->prepare($insertCategoria);
        
            $stmt->bindValue(":nome", $categoria->getNomeCategoria());

            $stmt->execute();

            return true;
        }

        public static function listaCategoria() : array {
            $categorias = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbCategoria")->fetchAll();

            foreach($stmt as $categoria){
                $objeto = new Categoria();
                $objeto->implement(
                    $categoria['codCategoria'], $categoria['nomeCategoria']
                );
                
                array_push($categorias, $objeto);
            }

            return $categorias;
        }
    }
?>