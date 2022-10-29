<?php 
  require_once("../../../../router.php");
  require_once("../../dist/php/ViewDashController.php");
  require_once("../../../../operation/seguranca/verificador-permanencia.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <?php ViewDashController::getHeadDash("Cadastro de Produtos"); ?>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!--==================== NAV MAIN ====================-->
      <?php ViewDashController::getNavMain(); ?>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="../../index3.php" class="brand-link">
          <span class="brand-text font-weight-light">DEV.WATCH</span>
        </a>

        <!--==================== SIDEBAR ====================-->
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
              <a href="../../index.php" class="d-block">ADMIN</a>
            </div>
          </div>
          <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!--==================== NAV ====================-->
          <?php ViewDashController::getNav(); ?>
        </div>
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Cadastro de Produtos</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                  <li class="breadcrumb-item active">Cadastro de Produtos</li>
                </ol>
              </div>
            </div>
          </div>
        </section>
        <!--==================== FORMS ====================-->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="forms">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Formulário</h3>
                  </div>

                  <form action="../../../../operation/cadastro/cadastro-produto.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="form-group row">
                        <div class="col-6">
                          <label>Nome</label>
                          <input type="text" class="form-control" id="nomeProduto" placeholder="Digite nome" name="nomeProduto" minlength="3" maxlength="50" required>
                        </div>
                        <div class="col-6">
                          <label>Categoria</label>
                          <select class="form-control" name="codigoCategoria" required>
                            <option selected value="0">Nenhuma</option>
                            <?php CategoriaController::listaOpcoesCategoria(); ?>
                          </select>
                        </div>   
                      </div>
                      <div class="form-group row">
                        <div class="col-6">
                          <label>Preço</label>
                          <input type="number" class="form-control" id="precoProduto" placeholder="Digite o preço" name="precoProduto" min="1" required>
                        </div>
                        <div class="col-6">
                          <label>Quantidade</label>
                          <input type="number" class="form-control" id="quantidadeProduto" placeholder="Digite a quantidade" name="quantidadeProduto" min="1" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Descrição</label>
                        <textarea class="form-control" id="descricaoProduto" placeholder="Digite a descrição" name="descricaoProduto" rows="3" minlength="10" maxlength="300" required></textarea>
                      </div>

                      <div class="form-group">
                        <label>Imagem</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imgProduto" name="imgProduto" accept="image/*" onchange="loadFile(event)">
                            <label class="custom-file-label">Escolher arquivo</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label id="label-preview"></label><br>
                        <img id="preview" class="preview">
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Produtos Cadastrados</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOME</th>
                          <th>CATEGORIA</th>
                          <th>QUANTIDADE</th>
                          <th>PREÇO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php ProdutoController::listaProdutosDash(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2022-2022 <a href="/">Dev.Watch</a>.</strong> All rights reserved.
      </footer>

    </div>
    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
            document.getElementById('label-preview').innerHTML = "Preview do Produto"
        };        
    </script>
    <?php ViewDashController::getImportJavaScript(); ?>
  </body>
</php>