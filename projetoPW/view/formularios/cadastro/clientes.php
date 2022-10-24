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
                    <span class="text">Clientes Cadastrados</span>
                </div>

                <div class="activity-data register-data">
                    <div class="data">
                        <span class="data-title">ID</span>
                        <span class="data-list">1</span>
                        <span class="data-list">2</span>
                        <span class="data-list">3</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Usuario</span>
                        <span class="data-list">Junior@Santos15</span>
                        <span class="data-list">AugustoMaia</span>
                        <span class="data-list">Otavio@augustoTiberio</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/main.js"></script>
</body>

</html>