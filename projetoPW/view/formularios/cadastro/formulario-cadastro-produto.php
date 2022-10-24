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
            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cadastro de Produto</span>
                </div>

                <div class="activity-data">
                    <form class="row g-3" action="../../../operation/cadastro/cadastro-produto.php" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <label class="form-label data-form">Nome</label>
                            <input type="text" class="form-control" name="txtNome" minlength="3" maxlength="50" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label data-form">Preço</label>
                            <input type="number" class="form-control" name="txtPreco" placeholder="R$00.000,00" min="1" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label data-form">Categoria</label>
                            <select class="form-select" name="slCategoria" required>
                                <option selected value="0">Nenhuma</option>
                                <?php CategoriaController::listaOpcoesCategoria(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label data-form">Descrição</label>
                            <textarea type="text" class="form-control" name="txtDescricao" rows="3" minlength="10" maxlength="300" required></textarea>
                        </div>

                        <div class="col-12 col-md-8">
                            <label class="form-label data-form">Imagem</label>
                            <input type="file" class="form-control" name="imgProduto" accept="image/*">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label data-form">Quantidade</label>
                            <input type="number" class="form-control" name="txtQuantidade" placeholder="1" min="1" required >
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <script src="../../assets/js/main-dash.js"></script>
</body>
</html>