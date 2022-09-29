<?php 
    function gerenciaProdutos(){
        require("storage/produtosDefault.php");

        if(isset($_COOKIE['categoriaProduto'])){
            if($_COOKIE['categoriaProduto'] == "Aquat"){$sequencia = ["Aquat", "Porto", "Metal", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Porto"){$sequencia = ["Porto", "Aquat", "Metal", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Metal"){$sequencia = ["Metal", "Aquat", "Porto", "Aviador", "Vintage"];
            }elseif($_COOKIE['categoriaProduto'] == "Aviador"){$sequencia = ["Aviador", "Aquat", "Porto", "Metal", "Vintage"];
            }else{$sequencia = ["Vintage", "Aquat", "Porto", "Metal", "Aviador"];}

            foreach($sequencia as $categoria){
                for($produto = 0; $produto < 30; $produto++){
                    if($produtos[$produto]['categoria'] == $categoria){
                        escreveProduto($produtos[$produto]['categoria'],$produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
                    }
                }
            }
        }else{
            shuffle($produtos);
            for($produto = 0; $produto < 30; $produto++){
                escreveProduto($produtos[$produto]['categoria'],$produtos[$produto]['nome'],$produtos[$produto]['preco'],$produtos[$produto]['img']);
            }
        }
    }

    function escreveProduto($categoria, $nome, $preco, $img){
        echo('
        <article class="products__card">
            <span class="featured__tag">'.$categoria.'</span>

            <img src="view/assets/img/'.$img.'.png" class="products__img">
            <h3 class="products__title">'.$nome.'</h3>
            <span class="products__price">R$'.$preco.'</span>

            <a class="products__button" href="produtoPag.php?categoria='.$categoria.'"><i class="bx bx-shopping-bag"></i></a>
        </article>
        ');
    }

    function escreveAvaliacao($nome, $data, $mensagem){
        echo('
        <div class="testimonial__card swiper-slide">
            <div class="testimonial__quote"><i class="bx bxs-quote-alt-left"></i></div>
            <p class="testimonial__description">'.$mensagem.'</p>
            <h3 class="testimonial__date">'.$data.'</h3>

            <div class="testimonial__perfil">
                <img src="assets/img/icon_avaliacao.png" alt="" class="testimonial__perfil-img">
                <div class="testimonial__perfil-data">
                    <span class="testimonial__perfil-name">'.$nome.'</span>
                </div>
            </div>
        </div>
        ');
    }
?>