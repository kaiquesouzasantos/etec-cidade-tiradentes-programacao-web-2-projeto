<?php
    require_once("../../router.php");

    if(CategoriaController::verificaPreenchimento()){
        CategoriaDAO::cadastrarCategoria($_POST['nomeCategoria']);
    }

    header("Location: ../../view/dashboard/pages/forms/cadastro-categoria.php");
?>