<?php
    class CategoriaDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCategoria($nome){
            $categoria = new Categoria();
            $categoria->construct_min($nome);

            try{
                $comandoSQL = "CALL spInserirCategoria(:nome, @p1)";
                $stmt = self::getConexao()->prepare($comandoSQL);

                $stmt->bindValue(":nome", $categoria->getNomeCategoria());

                $stmt->execute();

                return true;
            } catch(Exception){
                return false;
            }
        }

        public static function atualizarCategoria($codigo, $nome){
            $categoria = new Categoria();
            $categoria->construct_full($codigo, $nome);

            try{
                $comandoSQL = "CALL spAtualizaCategoria(:codigo, :nome, @p2)";
                $stmt = self::getConexao()->prepare($comandoSQL);

                $stmt->bindValue(":codigo", $categoria->getCodCategoria());
                $stmt->bindValue(":nome", $categoria->getNomeCategoria());

                $stmt->execute();

                return true;
            } catch(Exception){
                return false;
            }
        }

        public static function deletaCategoria($codCategoria){
            try{
                $comandoSQL = "CALL spExcluirCategoria(${codCategoria}, @p1)";
                $stmt = self::getConexao()->prepare($comandoSQL);

                $stmt->execute();
                
            } catch(Exception){
                return false;
            }
        }

        public static function retornaCategoria($codCategoria) : Categoria {
            try{
                $stmt = self::getConexao()->query("SELECT * FROM tbCategoria WHERE codCategoria = ${codCategoria}")->fetch();
            
                $categoria = new Categoria();
                $categoria->construct_full($stmt['codCategoria'], $stmt['nomeCategoria']);
    
                return $categoria;
            } catch(Exception){
                return false;
            }
        }

        public static function listaCategoria() : array {
            $categorias = array();

            try{
                $stmt = self::getConexao()->query("SELECT * FROM tbCategoria")->fetchAll();

                foreach($stmt as $categoria){
                    $objeto = new Categoria();
                    $objeto->construct_full(
                        $categoria['codCategoria'], $categoria['nomeCategoria']
                    );
                    
                    array_push($categorias, $objeto);
                }
            } catch(Exception){
                return false;
            }

            return $categorias;
        }
    }
?>