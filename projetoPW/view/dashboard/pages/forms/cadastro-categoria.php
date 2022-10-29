<?php 
  require_once("../../../../router.php");
  require_once("../../dist/php/ViewDashController.php");
  require_once("../../../../operation/seguranca/verificador-permanencia.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <?php ViewDashController::getHeadDash("Cadastro de Categorias"); ?>
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
                <h1>Cadastro de Categorias</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                  <li class="breadcrumb-item active">Cadastro Categorias</li>
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
                  <form action="../../../../operation/cadastro/cadastro-categoria.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nome</label>
                        <input type="text" class="form-control" id="txtNome" placeholder="Digite o Nome da Categoria"
                          name="nomeCategoria" minlength="3" maxlength="50" required>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <!--==================== LISTAGEM ====================-->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Categorias Cadastradas</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
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
                    <table class="table table-head-fixed text-nowrap ">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>NOME</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php CategoriaController::listaCategoria(); ?>
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

      <aside class="control-sidebar control-sidebar-dark">
      </aside>
    </div>
    
    <?php ViewDashController::getImportJavaScript(); ?>
  </body>
</php>