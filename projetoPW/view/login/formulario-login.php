<?php require_once("../../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHead("../assets/css/styles.css"); ?>
<body>
    <!--==================== HEADER ====================-->
    <?php ViewController::getHeader("../index.php", ""); ?>

    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="newsletter section container">
           <div class="login__bg">
               <h1>LOGIN</h1>
               <form action="../../operation/seguranca/verificador-acesso.php" class="form" method="POST">
                   <input type="text" name="txtUser" placeholder="Digite seu usuario" class="login__input">
                   <input type="password" name="pwSenha" placeholder="Digite sua senha" class="login__input">
                   <button class="btn-submit" type="submit">LOGIN</button>
                   <a href="../usuario/formulario-cadastro-cliente.php">Cadastrar</a>
                </form>
           </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <?php ViewController::getFooter("../index.php"); ?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i></a>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>