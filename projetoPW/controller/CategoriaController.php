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

        public static function listaCategoria(){
            $categorias = CategoriaDAO::listaCategoria();
            $listagem = "";

            foreach($categorias as $categoria){
                $listagem.='
                <tr>    
                    <td>'.$categoria->getCodCategoria().'</td>
                    <td>'.$categoria->getNomeCategoria().'</td>
                    <td>
                        <a href="../../../../operation/deleta/deleta-categoria.php?codCategoria='.$categoria->getCodCategoria().'" class="form-control btn btn-danger"><i class="bx bx-trash-alt"></i></a>
                    </td>
                    <td>
                    <td>
                        <a href="atualiza-categoria.php?codCategoria='.$categoria->getCodCategoria().'" class="form-control btn btn-warning"><i class="bx bx-pencil"></i></a>
                    </td>
                </tr>';
            }

            echo($listagem);
        }
    }
?>