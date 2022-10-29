<?php require_once("../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHead("assets/css/styles.css"); ?>
<body>
<!--==================== HEADER ====================-->
<?php ViewController::getHeader(""); ?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home" id="home">
        <div class="home__container container grid">
            <div class="home__img-bg">
                <img src="assets/img/inicio.png" alt="" class="home__img">
            </div>

            <div class="home__social">
                <a href="https://www.facebook.com/" target="_blank" class="home__social-link">Facebook</a>
                <a href="https://twitter.com/" target="_blank" class="home__social-link">Twitter</a>
                <a href="https://www.instagram.com/" target="_blank" class="home__social-link">Instagram</a>
            </div>

            <div class="home__data">
                <h1 class="home__title">NOVO RELÓGIO <br> C - PERPÉTUO</h1>
                <p class="home__description">
                    Movimento do relógio mecânico, corda automática Pellaton, calibre manufaturado 52610, reserva de
                    marcha de 7 dias, indicação da reserva de marcha, calendário perpétuo... </p>
                <span class="home__price">R$246.100</span>

                <div class="home__btns">
                    <a href="#produtos" class="button button--gray button--small">Relógios</a>
                </div>
            </div>
        </div>
    </section>

    <!--==================== SOBRE ====================-->
    <section class="story section container" id="quemsomos">
        <div class="story__container grid">
            <div class="story__data">
                <h2 class="section__title story__section-title">SOBRE NÓS</h2>
                <p class="story__description">Com mais de 20 anos de existência, a marca Dev.Watch é considerada uma das
                    mais valiosas do mundo. Sua produção teve início com os tradicionais relógios de bolso.</p>
                <p>Logo a empresa começou a investir na fabricação dos modernos relógios de pulso, venham conhecer
                    nossas lojas fisicas, temos lojas no shopping de Itaquera, Aricanduva, e Tatuapé.</p>
            </div>

            <div class="story__images">
                <img src="assets/img/rolex.png" alt="" class="story__img">
                <div class="story__square"></div>
            </div>
        </div>
    </section>

    <!--==================== PRODUTOS ====================-->
    <section class="products section container" id="produtos">
        <h2 class="section__title">Produtos</h2>

        <div class="products__container grid">
            <?php ProdutoController::listaProdutos(); ?>
        </div>
    </section>

    <!--==================== AVALIACAO ====================-->
    <section class="testimonial section container" id="comentario">
        <div class="testimonial__container grid">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote"><i class="bx bxs-quote-alt-left"></i></div>
                        <p class="testimonial__description">São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.</p>
                        <h3 class="testimonial__date">Maio 27. 2022</h3>
                        <div class="testimonial__perfil">
                            <img src="assets/img/icon_avaliacao.png" alt="" class="testimonial__perfil-img">
                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Augusto Maia</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote"><i class="bx bxs-quote-alt-left"></i></div>
                        <p class="testimonial__description">São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.</p>
                        <h3 class="testimonial__date">Fevereiro 13. 2022</h3>
                        <div class="testimonial__perfil">
                            <img src="assets/img/icon_avaliacao.png" alt="" class="testimonial__perfil-img">
                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Silverio Oliveira</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote"><i class="bx bxs-quote-alt-left"></i></div>
                        <p class="testimonial__description">São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.</p>
                        <h3 class="testimonial__date">Dezembro 18. 2021</h3>
                        <div class="testimonial__perfil">
                            <img src="assets/img/icon_avaliacao.png" alt="" class="testimonial__perfil-img">
                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Otávio Augusto Tiberio</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next"><i class='bx bx-right-arrow-alt'></i></div>
                <div class="swiper-button-prev"><i class='bx bx-left-arrow-alt'></i></div>
            </div>

            <div class="testimonial__images">
                <div class="testimonial__square"></div>
                <img src="assets/img/img_avaliacao.png" alt="" class="testimonial__img">
            </div>


        </div>
    </section>


    <!--==================== NEWSLETTER ====================-->
    <section class="newsletter section container" id="newsletter">
        <div class="newsletter__bg grid">
            <div>
                <h2 class="newsletter__title">Assine o nosso<br> Newsletter</h2>
                <p class="newsletter__description">
                    Não perca seus descontos. Assine nossa newsletter por e-mail para obter as melhores ofertas,
                    descontos, cupons, presentes e muito mais.
                </p>
            </div>

            <form action="https://api.staticforms.xyz/submit" class="newsletter__subscribe" method="post">
                <input type="hidden" name="accessKey" value="f02ab4ca-351e-4ae3-9e1e-c35ee22e36c9">
                <!-- Requerimento -->
                <input type="hidden" name="redirectTo"
                    value="http://etec199-2021-kaiquesouzasantos.epizy.com/1_projetos/2505/index.php">
                <!-- Constancia -->
                <input type="text" name="honeypot" style="display: none;"> <!-- Proteção de Spam -->
                <input type="email" name="$E-mail" placeholder="Digite seu e-mail" class="newsletter__input">
                <button class="button" type="submit">INSCREVER</button>
            </form>
        </div>
    </section>

    <!--==================== FOOTER ====================-->
    <?php ViewController::getFooter(""); ?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i></a>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>