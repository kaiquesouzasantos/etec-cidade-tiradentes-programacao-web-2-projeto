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
                if(empty($campo)){
                    return false;
                }
            }

            return true;
        }
        
        public static function listaProdutos(){
            $produtos = ProdutoDAO::listaProduto();

            foreach($produtos as $produto){
                echo('
                <article class="products__card">
                    <span class="featured__tag">'.$produto->getCategoria().'</span>
        
                    <img src="assets/img/'.$produto->getImgProduto().'.png" class="products__img">
                    <h3 class="products__title">'.$produto->getNomeProduto().'</h3>
                    <span class="products__price">R$'.$produto->getPrecoProduto().'</span>
        
                    <a class="products__button" href="produtoPag.php?categoria='.$produto->getCategoria().'"><i class="bx bx-shopping-bag"></i></a>
                </article>
                ');
            }
        }
    }
?>