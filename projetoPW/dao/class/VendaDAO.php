<?php
    class VendaDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCarrinho($codCliente){
            $venda = new Venda();
            $venda->construct_min(
                ClienteDAO::retornaCliente($codCliente)
            );

            try{
                $insertVenda = "INSERT INTO tbVenda(codCliente, statusVenda) 
                VALUES (:cliente, 0)";

                $stmt = self::getConexao()->prepare($insertVenda);

                $stmt->bindValue(":cliente", $venda->getCliente()->getCodCliente());

                $stmt->execute();

                return true;
            } catch(Exception){
                return false;
            }
        }

        public static function verificaCarrinho($codCliente) : Categoria {
            try{
                $stmt = self::getConexao()->query("SELECT * FROM tbVenda WHERE codCliente = ${codCliente}")->fetch();
                
                if($stmt->execute()){
                    return $stmt['codVenda'];
                }
            } catch(Exception){
                return false;
            }
        }
    }
?>