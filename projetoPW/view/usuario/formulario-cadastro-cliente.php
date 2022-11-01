<?php require_once("../../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHead("styles.css"); ?>
<body>
    <!--==================== HEADER ====================-->
    <?php ViewController::getHeader("../index.php", ""); ?>

    <!--==================== MAIN ====================-->
    <main class="main">
        <section class="login section container">
           <div class="login__bg">
               <h1>CADASTRO</h1>
               <form class="form" action="../../operation/cadastro/cadastro-cliente.php" method="POST" enctype="multipart/form-data">
                   <input type="text" name="nomeCliente" placeholder="Nome" class="login__input" minlength="2" required>
                   <div class="small__input">
                        <input type="text" name="cpfCliente" placeholder="CPF" class="login__input" minlength="11" required>
                        <input type="email" name="emailCliente" placeholder="Email" class="login__input" minlength="2" required>
                    </div>
                    <div class="small__input">
                        <input type="password" name="senhaCliente" placeholder="Senha" class="login__input" minlength="6" required>
                        <input type="password" name="senhaCliente" placeholder="Confirmar senha" class="login__input" minlength="6" required>
                    </div>
                    <input type="text" name="logradouroCliente" placeholder="Logradouro" class="login__input" minlength="5" required>
                    <div class="small__input">
                        <input type="number" name="numeroCliente" placeholder="Numero" class="login__input" min="1" required>
                        <input type="text" name="complementoCliente" placeholder="Complemento" class="login__input">
                    </div>
                    <div class="small__input">
                        <input type="text" name="bairroCliente" placeholder="Bairro" class="login__input" minlength="2" required>
                        <input type="text" name="cidadeCliente" placeholder="Cidade" class="login__input" minlength="2" required>
                    </div>
                    <div class="small__input">
                        <input type="text" name="UFCliente" placeholder="UF" class="login__input" minlength="2" maxlength="2" required>
                        <input type="text" name="CEPCliente" placeholder="CEP" class="login__input"  minlength="8" required>
                    </div>
                   <input type="file" name="fotoCliente" placeholder="Foto" class="login__input" required>
                   <button class="btn-submit" type="submit">Cadastrar</button>
                   <a href="../login/formulario-login.php">Login</a>
                </form>
           </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <?php ViewController::getFooter("../index.php"); ?>

    <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i></a>

    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>