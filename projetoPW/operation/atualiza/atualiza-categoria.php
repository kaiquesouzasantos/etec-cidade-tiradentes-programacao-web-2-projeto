<?php
    require_once("../../router.php");

    if(CategoriaController::verificaPreenchimento()){
        CategoriaDAO::atualizarCategoria($_POST['codigoCategoria'], $_POST['nomeCategoria']);
    }

    header("Location: ../../view/dashboard/pages/forms/cadastro-categoria.php");
?>