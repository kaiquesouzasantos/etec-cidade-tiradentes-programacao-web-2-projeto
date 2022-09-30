<?php 
    require_once("../../../router.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php ViewController::getHeadDashboard(); ?>
<body>

    <!-- SIDE LINKS -->
    <?php ViewController::getNavDashboard("../../", ""); ?>

    <!-- SECTION -->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <img src="../../assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cadastro de  Categoria</span>
                </div>

                <div class="activity-data">
                    <form class="row g-3" action="../../../operation/cadastro/cadastro-categoria.php" method="POST">
                        <div class="col-md-20">
                            <label class="form-label data-form">Nome da Categoria</label>
                            <input type="text" class="form-control" name="txtNome" minlength="3" maxlength="50" required>
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </div>
                    </form>
                </div>
    </section>
    <script src="../../assets/js/main-dash.js"></script>
</body>
</html>