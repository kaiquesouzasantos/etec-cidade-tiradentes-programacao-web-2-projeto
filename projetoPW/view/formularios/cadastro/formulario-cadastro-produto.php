<?php include("controladores/verificador-permanencia.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Dev. Watch | Produto</title>
</head>

<body>

    <!-- SIDE LINKS -->
    <?php include 'parties/nav-links.php'; ?>

    <!-- SECTION -->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <img src="assets/img/icon_admin.png" alt="">
        </div>

        <div class="dash-content">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Cadastro de Produto</span>
                </div>

                <div class="activity-data">
                    <form class="row g-3" action="" method="POST">
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
                                <option selected value="Null">Nenhuma</option>
                                <option value="Aquat">Aquat</option>
                                <option value="Metal">Metal</option>
                                <option value="Porto">Porto</option>
                                <option value="Aviador">Aviador</option>
                                <option value="Vintage">Vintage</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label data-form">Descrição</label>
                            <textarea type="text" class="form-control" name="txtDescricao" rows="3" minlength="10" maxlength="300" required></textarea>
                        </div>

                        <div class="col-12 col-md-8">
                            <label class="form-label data-form">Imagem</label>
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label data-form">Quantidade</label>
                            <input type="number" class="form-control" name="txtQuantidade" placeholder="1" min="1" required>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </div>
                    </form>
                </div>

                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Produtos já cadastrados</span>
                </div>
                <div class="activity-data">
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
    </section>

    <script src="assets/js/main.js"></script>
</body>

</html>