<?php
    class ProdutoController{
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
                    <span class="featured__tag">'.$produto->getCategoria()->getNomeCategoria().'</span>
        
                    <img src="../operation/armazena/img-produto/'.$produto->getImgProduto().'" class="products__img">
                    <h3 class="products__title">'.$produto->getNomeProduto().'</h3>
                    <span class="products__price">R$'.$produto->getPrecoProduto().'</span>
        
                    <a class="products__button" href="produtoPag.php?categoria='.$produto->getCategoria()->getCodCategoria().'"><i class="bx bx-shopping-bag"></i></a>
                </article>
                ');
            }
        }

        public static function listaProdutosDash(){
            $produtos = ProdutoDAO::listaProduto();

            foreach($produtos as $produto){
                echo('
                <tr>
                    <td>'.$produto->getCodProduto().'</td>
                    <td>'.$produto->getNomeProduto().'</td>
                    <td>'.$produto->getCategoria()->getNomeCategoria().'</td>
                    <td>'.$produto->getQuantidadeProduto().'</td>
                    <td>R$'.$produto->getPrecoProduto().'</td>
                    <td>
                        <a href="../../../../operation/deleta/deleta-produto.php?codProduto='.$produto->getCodProduto().'" class="form-control btn btn-danger"><i class="bx bx-trash-alt"></i></a>
                    </td>
                    <td>
                    <td>
                        <a href="atualiza-produto.php?codProduto='.$produto->getCodProduto().'" class="form-control btn btn-warning"><i class="bx bx-pencil"></i></a>
                    </td>
                <tr>
                ');
            }
        }
    }
?>