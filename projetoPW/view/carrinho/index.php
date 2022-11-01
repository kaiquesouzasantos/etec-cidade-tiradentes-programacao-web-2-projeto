<?php require_once("../../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHeader(""); ?>
<?php ViewController::getHead("styles.css"); ?>
<br>
<br>
<br>
<br>
<br>
<br>

<body>
    <section id="cart" class="sectioln-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remover</td>
                    <td>Imagem</td>
                    <td>Produto</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="bx bx-minus-circle"></i></a></td>
                    <td><img src="assets/img/pro_01.png" alt=""></td>
                    <td>AVIADOR - ROYAL MACES</td>
                    <td>R$71.400</td>
                    <td><input type="number" value="1"></td>
                    <td>R$71.400</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bx bx-minus-circle"></i></a></td>
                    <td><img src="assets/img/pro_15.png" alt=""></td>
                    <td>AVIADOR 41 - MARK XVIII</td>
                    <td>R$31.500</td>
                    <td><input type="number" value="1"></td>
                    <td>R$31.500</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bx bx-minus-circle"></i></a></td>
                    <td><img src="assets/img/pro_16.png" alt=""></td>
                    <td>AVIADOR - MARK XVIII</td>
                    <td>R$38.900</td>
                    <td><input type="number" value="1"></td>
                    <td>R$38.900</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="bx bx-minus-circle"></i></a></td>
                    <td><img src="assets/img/pro_19.png" alt=""></td>
                    <td>TG - AVIADOR 41</td>
                    <td>R$47.900</td>
                    <td><input type="number" value="1"></td>
                    <td>R$47.900</td>
                </tr>

            </tbody>
        </table>
    </section>
    <br>
    
    <section id="cart" class="section-p1">
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Aplicar cupom</h3>
            <div>
                <input type="text" placeholder="Entrar com seu cupom">
                <button class="normal">Aplicar</button>
            </div>
        </div>

        <div id="subtotal">
            <h3><strong>Compra total</strong></h3>
            <table>
                <tr>
                    <td>Valor do carrinho</td>
                    <td>R$189.700</td>
                </tr>
                <tr>
                    <td>Frete</td>
                    <td>Gratis</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>R$189.700</strong></td>
                </tr>
            </table>
            <br>
            <button class="normal">Prosseguir para checkout</button>
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