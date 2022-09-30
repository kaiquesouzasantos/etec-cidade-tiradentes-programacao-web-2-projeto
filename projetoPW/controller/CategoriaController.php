<?php
    class CategoriaController{
        public static function verificaPreenchimento(){
            $campos = $_POST;

            foreach($campos as $campo){
                if(empty($campo)){
                    return false;
                }
            }

            return true;
        }

        public static function listaOpcoesCategoria(){
            $categorias = CategoriaDAO::listaCategoria();
            $listagem = "";

            foreach($categorias as $categoria){
                $listagem.='<option value="'.$categoria->getCodCategoria().'">'.$categoria->getNomeCategoria().'</option>';
            }

            echo($listagem);
        }
    }
?>