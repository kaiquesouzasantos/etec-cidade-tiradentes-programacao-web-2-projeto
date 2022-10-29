<?php
    require_once("../router.php");

    class ClienteController{
        public static function getDestino(){
            $nome = $_FILES['imgProduto']['name'];
            $destino = '../armazena/img-produto/'.$nome;
            $arquivo_tmp = $_FILES['imgProduto']['tmp_name'];
            move_uploaded_file($arquivo_tmp, $destino); 
    
            return $nome;
        }

        public static function verificaPreenchimento(){
            $campos = $_POST;

            foreach($campos as $campo){
                if(empty($campo) and $campo != "txtComplemento"){
                    return false;
                }
            }

            return true;
        }
    }
?>