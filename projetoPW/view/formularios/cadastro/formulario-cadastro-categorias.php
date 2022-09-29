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
    <title>Dev. Watch | Categoria</title>
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
                    <span class="text">Cadastrar nova Categoria</span>
                </div>

                <div class="activity-data">
                    <form class="row g-2" action="" method="POST">
                        <div class="col-md-20">
                            <label class="form-label data-form">Nome da Categoria</label>
                            <input type="text" class="form-control" name="txtNome" minlength="3" maxlength="50" required>
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-warning">Cadastrar</button>
                        </div>
                    </form>


                </div>

                <div class="activity">
                    <div class="title">
                        <i class="uil uil-clock-three"></i>
                        <span class="text">Categorias já cadastradas</span>
                    </div>
                    <div class="activity-data">
                        <div class="data">
                            <span class="data-list">Aquat</span>
                            <span class="data-list">Metal</span>
                            <span class="data-list">Porto</span>
                            <span class="data-list">Aviador</span>
                            <span class="data-list">Vintage</span>
                        </div>
                    </div>
                </div>




    </section>


    <script src="assets/js/main.js"></script>
</body>

</html>