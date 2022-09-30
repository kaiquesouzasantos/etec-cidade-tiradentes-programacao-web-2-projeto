<?php require_once("../router.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHeadDashboard(""); ?>
<body>
    <!-- SIDE LINKS -->
    <?php ViewController::getNavDashboard("", "formularios/cadastro/", "../"); ?>

    <!-- SECTION -->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <img src="assets/img/dashclip.svg" alt="dash icon"> 
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bx-shopping-bag'></i>
                        <span class="text">Vendas</span>
                        <span class="number">178</span>
                    </div>
                    <div class="box box2">
                        <i class='bx bx-chat'></i>
                        <span class="text">Mensagens</span>
                        <span class="number">25</span>
                    </div>
                    <div class="box box3">
                        <i class='bx bx-dollar'></i>
                        <span class="text">Faturamento</span>
                        <span class="number">R$193.500</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <img src="assets/img/clock-icon.svg" alt="dash icon">
                    <span class="text">Últimas Vendas</span>
                </div>

                <div class="activity-data">
                    <div class="data">
                        <span class="data-title">Protocolo</span>
                        <span class="data-list">20220609-21</span>
                        <span class="data-list">20220212-345</span>
                        <span class="data-list">20211210-843</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Usuario</span>
                        <span class="data-list">Junior@Santos15</span>
                        <span class="data-list">AugustoMaia</span>
                        <span class="data-list">Otavio@augustoTiberio</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Total</span>
                        <span class="data-list">R$29.990</span>
                        <span class="data-list">R$54.700</span>
                        <span class="data-list">R$108.900</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Inicio</span>
                        <span class="data-list">09/06/2022</span>
                        <span class="data-list">12/02/2022</span>
                        <span class="data-list">10/12/2021</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Situação</span>
                        <span class="data-list">Transito</span>
                        <span class="data-list">Entregue</span>
                        <span class="data-list">Entregue</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>
</html>