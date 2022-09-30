<?php
    class ViewController {
        public static function getHead($css){
            echo('
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
                <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
                <link rel="stylesheet" href="'.$css.'">
                <title>Dev.Watch</title>
            </head>
            ');
        }

        public static function getHeadDashboard($caminho = "../../"){
            echo('
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="'.$caminho.'assets/css/bootstrap.min.css">
                <link rel="stylesheet" href="'.$caminho.'assets/css/styles-dashboard.css">
                <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
                <title>Dev. Watch | Dashboard</title>
            </head>
            ');
        }

        public static function getHeader($caminho = "", $login = "login/"){
            echo('
            <header class="header" id="header">
                <nav class="nav container">
                    <a href="#" class="nav__logo"><i class="bx bxs-watch nav__logo-icon"></i> Dev.Watch</a>

                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="'.$caminho.'#home" class="nav__link active-link">Inicio</a></li>
                            <li class="nav__item"><a href="'.$caminho.'#quemsomos" class="nav__link">Sobre nós</a></li>
                            <li class="nav__item"><a href="'.$caminho.'#produtos" class="nav__link">Produtos</a></li>
                            <li class="nav__item"><a href="'.$caminho.'#comentario" class="nav__link">Comentários</a></li>
                        </ul>

                        <div class="nav__close" id="nav-close"><i class="bx bx-x" ></i></div>
                    </div>

                    <div class="nav__btns">
                        
                        <a class="nav__shop" href="'.$login.'formulario-login.php"><i class="bx bx-user"></i></a>
                        <div class="nav__shop"  id="cart-shop"><a href="carrinho/cart.php" class="nav__shop"><i class="bx bx-shopping-bag"></i></a></div>
                        <div class="nav__toggle" id="nav-toggle"><i class="bx bx-grid-alt"></i></div>
                    </div>

                </nav>
            </header>    
            ');
        }

        public static function getNavDashboard($caminho = "../", $arquivo = "", $logout = "../../../"){
            echo('
            <nav>
                <div class="logo-name">
                    <span class="logo_name">Dev. Watch</span>
                </div>

                <div class="menu-items">

                    <ul class="nav-links">
                    <li><a class="navdash-links" href="'.$caminho.'dashboard.php">
                      <img class="icon-nav" src="'.$caminho.'assets/img/dash-icon.svg" alt="nav icon"> 
                      <span class="link-name">Dashboard</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'formulario-cadastro-produto.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/product-icon.svg" alt="nav icon" />
                            <span class="link-name">Produto</span>
                        </a></li>
                        
                        <li><a class="navdash-links" href="'.$arquivo.'formulario-cadastro-categoria.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/category-icon.svg" alt="nav icon" />
                            <span class="link-name">Categoria</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'cliente.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/person-icon.svg" alt="nav icon" />
                            <span class="link-name">Clientes</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'vendas.php">
                            <img class="icon-nav" src="'.$caminho.'assets/img/buy-icon.svg" alt="nav icon" />
                            <span class="link-name">Vendas</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'cadastro-produto.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/product-nobg-icon.svg" alt="nav icon" />
                            <span class="link-name">Produtos Registrados</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'cadastro-categoria.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/category-nobg-icon.svg" alt="nav icon" />
                            <span class="link-name">Categorias Registradas</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'cliente.php">
                        <img class="icon-nav" src="'.$caminho.'assets/img/person-nobg-icon.svg" alt="nav icon" />
                            <span class="link-name">Clientes Registrados</span>
                        </a></li>

                        <li><a class="navdash-links" href="'.$arquivo.'vendas.php">
                                <img class="icon-nav" src="'.$caminho.'assets/img/buy-nobg-icon.svg" alt="nav icon" />
                                <span class="link-name">Registro de vendas</span>
                        </a></li>
 
                    </ul>
                    
                    <ul class="logout-mode">
                        <li>
                            <a href="'.$logout.'operation/seguranca/logout.php">
                                <i class="bx bx-log-out bx-flip-horizontal"></i>
                                <span class="link-name">Logout</span>
                            </a>
                        </li>   
                        <li class="mode">
                            <div class="mode-toggle"></div>
                        </li>
                    </ul>
                </div>
            </nav>
            ');
        }
        
        public static function getFooter($caminho){
            echo('
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <h3 class="footer__title">Endereço</h3>

                        <ul class="footer__list">
                            <li class="footer__link">São Paulo - Brasil</li>
                            <li class="footer__link">Av. Don Corleone, 344</li>
                            <li class="footer__link">123-456-789</li>
                            <li class="footer__link">devwatch@gmail.com</li>
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
                            <li><a href="'.$caminho.'#home" class="footer__link">Inicio</a></li>
                            <li><a href="'.$caminho.'#quemsomos" class="footer__link">Sobre nós</a></li>
                            <li><a href="'.$caminho.'#produtos" class="footer__link">Produtos</a></li>
                            <li><a href="'.$caminho.'#lancamentos" class="footer__link">Comentários</a></li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Kaique, Henry, Miguel, Bruna, Kauan G, Kaio</span>
            </footer>
            ');
        }  
    }
?>