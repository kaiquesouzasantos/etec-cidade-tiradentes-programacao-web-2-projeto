<?php 
    require_once("../router.php");
    // setcookie('categoriaProduto', $_GET['categoria']); 
    $produto = ProdutoDAO::retornaProduto($_GET['codProduto']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHead("assets/css/style-produto.css"); ?>

<body>
    <!--==================== HEADER ====================-->
    <?php ViewController::getHeader(""); ?>

    <!--==================== MAIN ====================-->
    <div class="main-wrapper">
        <div class="container">
            <br><br><br><br>
            <div class="product-div">
                <div class="product-div-left">
                    <div class="img-container">
                        <img src="../operation/armazena/img-produto/<?php echo($produto->getImgProduto());?>" alt="watch">
                    </div>
                    <div class="hover-container">
                        <div><img src="assets/img/pro_002.png"></div>
                        <div><img src="assets/img/pro_003.png"></div>
                        <div><img src="assets/img/pro_004.png"></div>
                        <div><img src="assets/img/pro_005.png"></div>
                        <div><img src="assets/img/pro_006.png"></div>
                    </div>
                </div>
                <div class="product-div-right">
                    <br>
                    <br>

                    <span class="product-name">
                        <?php echo($produto->getNomeProduto());?>
                    </span>

                    <div class="product-rating">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star-half-alt"></i></span>
                    </div>

                    <p class="product-description">
                        <?php echo($produto->getDescricaoProduto());?>
                    </p>

                    <br>
                    <br>

                    <td>
                        <strong>R$<?php echo($produto->getPrecoProduto());?></strong>
                    </td>

                    <br>
                    <br>

                    <td>
                        <strong>EM ATÉ 10X DE R$ 3.260,00</strong>
                    </td>

                    <br>
                    <br>

                    <td><a href="#"><i class="bx bx-minus"></i></a><input class="inputNumber" type="number" value="1"><a
                            href="#"><i class="bx bx-plus"></i></a></td>
                    <br>
                    <br>
                    <div class="btn-groups">
                        <button type="button" class="add-cart-btn"><i class="fas fa-shopping-cart"></i><strong>Adicionar
                                ao carrinho</strong></button>
                        <br>
                        <button type="button" class="buy-now-btn"><i class="fas fa-wallet"></i><strong>Comprar
                                Agora</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

    <!--==================== FOOTER ====================-->
    <?php ViewController::getFooter(""); ?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i></a>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>