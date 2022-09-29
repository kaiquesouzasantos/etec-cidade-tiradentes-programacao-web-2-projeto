<?php
    require_once("../router.php");

    class ProdutoController{
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