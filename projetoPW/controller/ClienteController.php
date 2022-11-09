<?php
    class ClienteController{
        public static function getDestino(){
            $nome = $_FILES['fotoCliente']['name'];
            $destino = '../armazena/img-cliente/'.$nome;
            $arquivo_tmp = $_FILES['fotoCliente']['tmp_name'];
            move_uploaded_file($arquivo_tmp, $destino); 
    
            return $nome;
        }

        public static function verificaPreenchimento(){
            $campos = $_POST;

            foreach($campos as $campo){
                if(empty($campo)){
                    return false;
                }
            }

            return true;
        }

        public static function listaCliente(){
            $clientes = ClienteDAO::listaCliente();
            $listagem = "";


            foreach($clientes as $cliente){
                $listagem.='
                <tr>
                    <td>'.$cliente->getCodCliente().'</td>
                    <td>'.$cliente->getNomeCliente().'</td>
                    <td>'.$cliente->getEmailCliente().'</td>
                    <td>'.$cliente->getUfCliente().'</td>
                    <td>'.$cliente->getAtividadeCliente().'</td>
                    <td>
                        <a href="../../../../operation/deleta/desativa-cliente.php?codCliente='.$cliente->getCodCliente().'" class="form-control btn btn-danger"><i class="bx bxs-user-x"></i></a>
                    </td>
                    <td>
                    <td>
                        <a href="atualiza-categoria.php?codCategoria='.$cliente->getCodCliente().'" class="form-control btn btn-warning"><i class="bx bx-detail"></i></a>
                    </td>
                </tr>
                ';
            }

            echo($listagem);
        }
    }
?>