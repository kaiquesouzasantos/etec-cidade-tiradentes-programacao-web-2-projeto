<?php 
    require("assets/php/contoller.php");
?>

 <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <title>Dev.Watch</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo"><i class='bx bxs-watch nav__logo-icon'></i> Dev.Watch</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Início</a></li>
                        <li class="nav__item"><a href="#quemsomos" class="nav__link">Sobre nós</a></li>
                        <li class="nav__item"><a href="#produtos" class="nav__link">Produtos</a></li>
                        <li class="nav__item"><a href="#comentario" class="nav__link">Comentários</a></li>
                    </ul>

                    <div class="nav__close" id="nav-close"><i class='bx bx-x' ></i></div>
                </div>

                <div class="nav__btns">
                    
                    <a class="nav__shop" href="login/formulario-login.php"><i class='bx bx-user'></i></a>
                    <div class="nav__shop"  id="cart-shop"><a href="carrinho/principal/cart.php" class="nav__shop"><i class='bx bx-shopping-bag'></i></a></div>
                    <div class="nav__toggle" id="nav-toggle"><i class='bx bx-grid-alt'></i></div>
                </div>

            </nav>
        </header>

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
                            Movimento do relógio mecânico, corda automática Pellaton, calibre manufaturado 52610, reserva de marcha de 7 dias, indicação da reserva de marcha, calendário perpétuo...                        </p>
                        <span class="home__price">R$246.100</span>

                        <div class="home__btns">
                            <a href="#quemsomos" class="button button--gray button--small">Quem somos</a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== SOBRE ====================-->
            <section class="story section container" id="quemsomos">
                <div class="story__container grid">
                    <div class="story__data">
                        <h2 class="section__title story__section-title">SOBRE NÓS</h2>
                        <h1 class="story__title">Dev.Watch</h1>
                        <p class="story__description">Com mais de 20 anos de existência, a marca Dev.Watch é considerada uma das mais valiosas do mundo. Sua produção teve início com os tradicionais relógios de bolso.</p>
                        <p>Logo a empresa começou a investir na fabricação dos modernos relógios de pulso, venham conhecer nossas lojas fisicas, temos lojas no shopping de Itaquera, Aricanduva, e Tatuapé.</p>
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
                    <?php gerenciaProdutos();?>
                </div>
            </section>

            <!--==================== AVALIACAO ====================-->
            <section class="testimonial section container" id="comentario">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <?php 
                                escreveAvaliacao("Augusto Maia", "Maio 27. 2022", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");
                                escreveAvaliacao("Silverio Oliveira", "Fevereiro 13. 2022", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");
                                escreveAvaliacao("Otávio Augusto Tiberio", "Dezembro 18. 2021", "São os melhores relógios que se adquire, também estão sempre com as últimas novidades e tendências, com um preço bem confortável e principalmente com a atenção você recebe, eles estão sempre atentos às suas perguntas.");                            
                            ?> 
                        </div>
                        
                        <div class="swiper-button-next"><i class='bx bx-right-arrow-alt' ></i></div>
                        <div class="swiper-button-prev"><i class='bx bx-left-arrow-alt' ></i></div>
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
                            Não perca seus descontos. Assine nossa newsletter por e-mail para obter as melhores ofertas, descontos, cupons, presentes e muito mais.
                        </p>
                    </div>

                    <form action="https://api.staticforms.xyz/submit" class="newsletter__subscribe" method="post">
                        <input type="hidden" name="accessKey" value="f02ab4ca-351e-4ae3-9e1e-c35ee22e36c9"> <!-- Requerimento -->
                        <input type="hidden" name="redirectTo" value="http://etec199-2021-kaiquesouzasantos.epizy.com/1_projetos/2505/index.php"> <!-- Constancia -->
                        <input type="text" name="honeypot" style="display: none;"> <!-- Proteção de Spam -->
                        <input type="email" name="$E-mail" placeholder="Digite seu e-mail" class="newsletter__input">
                        <button class="button" type="submit">INSCREVER</button>
                    </form>
                </div>
            </section>
        

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <h3 class="footer__title">Endereço</h3>

                    <ul class="footer__list">
                        <li>São Paulo - Brasil</li>
                        <li>Av. Don Corleone, 344</li>
                        <li>123-456-789</li>
                        <li>devwatch@gmail.com</li>
                    </ul>
                </div>
                <div class="footer__content">
                    <h3 class="footer__title">Informações</h3>

                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Razão Social</a></li>
                        <li><a href="#" class="footer__link">Suporte Personalizado</a></li>
                        <li><a href="#" class="footer__link">Trabalhe Conosco</a></li>
                        <li><a href="#" class="footer__link">Politica de Privacdade</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Loja</h3>

                    <ul class="footer__links">
                        <li><a href="#home" class="footer__link">Inicio</a></li>
                        <li><a href="#recomendados" class="footer__link">Sobre nós</a></li>
                        <li><a href="#produtos" class="footer__link">Produtos</a></li>
                        <li><a href="#lancamentos" class="footer__link">Comentários</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Admin</h3>

                    <ul class="footer__links">
                        <li><a href="admin-login.html" class="footer__link">Login</a></li>

                    </ul>
                </div>
            </div>

            <span class="footer__copy">&#169; Kaique Souza, Henry Modesto, Miguel Santos, Bruna Karen, Kauan Gabriel, Kaio Hergesel.</span>
        </footer>

        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i></a>

        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
