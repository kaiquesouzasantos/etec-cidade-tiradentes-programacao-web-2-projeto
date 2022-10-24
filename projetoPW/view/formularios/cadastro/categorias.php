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

                <div class="activity">
                    <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">Categorias Cadastradas</span>
                    </div>

                    <div class="activity-data">
                        
                        <div class="data">
                            <span class="data-title">Categorias</span>
                            <span class="data-list">Aquat</span>
                            <span class="data-list">Metal</span>
                            <span class="data-list">Porto</span>
                            <span class="data-list">Aviador</span>
                            <span class="data-list">Vintage</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <script src="assets/js/main.js"></script>
</body>

</html>