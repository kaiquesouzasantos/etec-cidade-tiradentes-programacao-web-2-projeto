<?php
    class ClienteDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrarCliente(
            $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
            $numLogCliente, $complementoCliente, $bairroCliente,
            $cidadeCliente, $ufCliente, $cepCliente, $imgCliente
        ){
            $cliente = new Cliente();
            $cliente->construct_min(
                $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
                $numLogCliente, $complementoCliente, $bairroCliente,
                $cidadeCliente, $ufCliente, $cepCliente, $imgCliente
            );

            $insertCliente = "
                INSERT INTO tbCliente(
                    nomeCliente, cpfCliente, emailCliente, logradouroCliente,
                    numLogCliente, complementoCliente, bairroCliente,
                    cidadeCliente, ufCliente, cepCliente, fotoCliente
                ) VALUES (
                    :nome, :cpf, :email, :log, 
                    :numLog, :complemento, :bairro,
                    :cidade, :uf, :cep, :img
                )";
            
            $stmt = self::getConexao()->prepare($insertCliente);
        
            $stmt->bindValue(":nome", $cliente->getNomeCliente());
            $stmt->bindValue(":cpf", $cliente->getCpfCliente());
            $stmt->bindValue(":email", $cliente->getEmailCliente());
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

        public static function retornaCliente($codCliente) : Cliente {
            $stmt = self::getConexao()->query("SELECT * FROM tbProduto WHERE codProduto = ${codCliente}");
            
            $cliente = new Cliente();
            $cliente->construct_full(
                $stmt['codCliente'], $stmt['nomeCliente'], $stmt['cpfCliente'],
                $stmt['emailCliente'], $stmt['logradouroCliente'], $stmt['numLogCliente'],
                $stmt['complementoCliente'], $stmt['bairroCliente'], $stmt['cidadeCliente'],
                $stmt['ufCliente'], $stmt['cepCliente'], $stmt['fotoCliente']
            );

            return $cliente;
        }

        public static function listaCliente() : array {
            $clientes = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbCliente")->fetchAll();

            foreach($stmt as $cliente){
                $objeto = new Cliente();
                $objeto->construct_full(
                    $cliente['codCliente'], $cliente['nomeCliente'], $cliente['cpfCliente'],
                    $cliente['emailCliente'], $cliente['logradouroCliente'], $cliente['numLogCliente'],
                    $cliente['complementoCliente'], $cliente['bairroCliente'], $cliente['cidadeCliente'],
                    $cliente['ufCliente'], $cliente['cepCliente'], $cliente['fotoCliente']
                );
                
                array_push($clientes, $objeto);
            }

            return $clientes;
        }
    }
?>
