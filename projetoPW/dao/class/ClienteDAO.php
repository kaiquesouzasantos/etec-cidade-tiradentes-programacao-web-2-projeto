<?php
    class ClienteDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCliente(
            $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
            $numLogCliente, $complementoCliente, $bairroCliente,
            $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $senhaCliente
        ){
            $cliente = new Cliente();
            $cliente->construct_min(
                $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
                $numLogCliente, $complementoCliente, $bairroCliente,
                $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $senhaCliente
            );
            /*
            $comandoSQL = "
                CALL spInserirCliente(
                    :nome, :cpf, :email, :senha, :log, 
                    :numLog, :complemento, :bairro,
                    :cidade, :uf, :cep, 1 , :img, @p13
                )";
            */

            $comandoSQL = "
            INSERT INTO tbCliente(
                nomeCliente, cpfCliente, emailCliente, logradouroCliente,
                numLogCliente, compCliente, bairroCliente,
                cidadeCliente, ufCliente, cepCliente, fotoCliente, senhaCliente, atividadeCliente
            ) VALUES (
                :nome, :cpf, :email, :log, 
                :numLog, :complemento, :bairro,
                :cidade, :uf, :cep, :img, :senha, 1
            )";
            
            $stmt = self::getConexao()->prepare($comandoSQL);
        
            $stmt->bindValue(":nome", $cliente->getNomeCliente());
            $stmt->bindValue(":cpf", $cliente->getCpfCliente());
            $stmt->bindValue(":email", $cliente->getEmailCliente());
            $stmt->bindValue(":senha", $cliente->getSenhaCliente());
            $stmt->bindValue(":log", $cliente->getLogradoruroCliente());
            $stmt->bindValue(":numLog", $cliente->getNumLogCliente());
            $stmt->bindValue(":complemento", $cliente->getComplementoCliente());
            $stmt->bindValue(":bairro", $cliente->getBairroCliente());
            $stmt->bindValue(":cidade", $cliente->getCidadeCliente());
            $stmt->bindValue(":uf", $cliente->getUfCliente());
            $stmt->bindValue(":cep", $cliente->getCepCliente());
            $stmt->bindValue(":img", $cliente->getImgCliente());

            $stmt->execute();

            return true;
        }

        public static function inativaAtividadeCliente($codCliente){
            try{
                $comandoSQL = "CALL spExcluirCliente(${codCliente}, @p1)";
                $stmt = self::getConexao()->prepare($comandoSQL);

                $stmt->execute();
                
            } catch(Exception){
                return false;
            }
        }

        public static function retornaCliente($codCliente) : Cliente {
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codCliente}")->fetch();
            
            $cliente = new Cliente();
            $cliente->construct_full(
                $stmt['codCliente'], $stmt['nomeCliente'], $stmt['CPFCliente'],
                $stmt['emailCliente'], $stmt['logradouroCliente'], $stmt['numLogCliente'],
                $stmt['compCliente'], $stmt['bairroCliente'], $stmt['cidadeCliente'],
                $stmt['UFCliente'], $stmt['CEPCliente'], $stmt['fotoCliente'], $stmt['senhaCliente']
            );

            $cliente->setAtividadeCliente($stmt['atividadeCliente']);

            return $cliente;
        }

        public static function listaCliente() : array {
            $clientes = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbCliente")->fetchAll();

            foreach($stmt as $cliente){
                $objeto = new Cliente();
                $objeto->construct_full(
                    $cliente['codCliente'], $cliente['nomeCliente'], $cliente['CPFCliente'],
                    $cliente['emailCliente'], $cliente['logradouroCliente'], $cliente['numLogCliente'],
                    $cliente['compCliente'], $cliente['bairroCliente'], $cliente['cidadeCliente'],
                    $cliente['UFCliente'], $cliente['CEPCliente'], $cliente['fotoCliente'], $cliente['senhaCliente']
                );

                $objeto->setAtividadeCliente($cliente['atividadeCliente']);
                
                array_push($clientes, $objeto);
            }

            return $clientes;
        }
    }
?>
