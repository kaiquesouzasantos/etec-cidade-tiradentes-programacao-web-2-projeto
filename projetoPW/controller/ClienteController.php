<?php
    require_once("../router.php");

    class ProdutoController{
        public static function getDestino(){
            $nome = $_FILES['imgFoto']['name'];
            $destino = rota('view/img-produto/').$_FILES['imgFoto']['name'];
            $arquivo_tmp = $_FILES['imgFoto']['tmp_name'];
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