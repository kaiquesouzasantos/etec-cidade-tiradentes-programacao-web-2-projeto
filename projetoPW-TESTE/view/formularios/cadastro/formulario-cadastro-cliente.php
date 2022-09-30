<?php require_once("../../../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHead("../../assets/css/styles.css"); ?>
<body>
    <!--==================== HEADER ====================-->
    <?php ViewController::getHeader("../../index.php", ""); ?>

    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="login section container">
           <div class="login__bg">
               <h1>CADASTRO</h1>
               <form class="form" action="" method="POST">
                   <input type="text" name="txtUser" placeholder="Nome" class="login__input" minlength="2" required>
                   <input type="email" name="txtEmail" placeholder="Email" class="login__input" minlength="2" required>
                   <input type="password" name="pwSenha" placeholder="Senha" class="login__input" minlength="6" required>
                   <input type="password" name="pwSenha" placeholder="Confirmar senha" class="login__input" minlength="6" required>
                   <input type="text" name="txtCPF" placeholder="CPF" class="login__input" minlength="11" required>
                   <input type="text" name="txtLogradouro" placeholder="Logradouro" class="login__input" minlength="5" required>
                   <input type="number" name="numNumLog" placeholder="Numero" class="login__input" min="1" required>
                   <input type="text" name="txtComplemento" placeholder="Complemento" class="login__input">
                   <input type="text" name="txtBairro" placeholder="Bairro" class="login__input" minlength="2" required>
                   <input type="text" name="txtCidade" placeholder="Cidade" class="login__input" minlength="2" required>
                   <input type="text" name="txtUF" placeholder="UF" class="login__input" minlength="2" maxlength="2" required>
                   <input type="text" name="txtCEP" placeholder="CEP" class="login__input"  minlength="8" required>
                   <input type="file" name="fileFoto" placeholder="Foto" class="login__input" required>

                   <button class="btn-submit" type="submit">Cadastrar</button>
                   <a href="../../login/formulario-login.php">Login</a>
                </form>
           </div>
        </section>
    </main>


    <!--==================== FOOTER ====================-->
    <?php ViewController::getFooter("../../index.php"); ?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i></a>

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>