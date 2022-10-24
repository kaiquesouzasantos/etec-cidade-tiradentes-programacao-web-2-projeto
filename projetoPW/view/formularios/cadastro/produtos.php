<?php require_once("../../../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHeadDashboard(); ?>
<body>
    <!-- SIDE LINKS -->
    <?php ViewController::getNavDashboard("../../", ""); ?>

    <!-- SECTION -->
    <section class="dashboard">
        <div class="top">
            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">

                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Produtos Cadastrados</span>
                </div>
                <div class="activity-data register-data">
                    <div class="data">
                        <span class="data-title">Nome Produto</span>
                        <span class="data-list">PORTOFINO</span>
                        <span class="data-list">CRONOGRAFO</span>
                        <span class="data-list">BIG PILOT</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Categoria</span>
                        <span class="data-list">Aviador</span>
                        <span class="data-list">Vintage</span>
                        <span class="data-list">Porto</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Preço</span>
                        <span class="data-list">R$ 50,000</span>
                        <span class="data-list">R$ 40,000</span>
                        <span class="data-list">R$ 20,000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>

</html>