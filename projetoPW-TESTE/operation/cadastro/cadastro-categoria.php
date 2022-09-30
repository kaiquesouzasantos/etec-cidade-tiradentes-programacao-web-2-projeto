<?php
    require_once("../../router.php");

    if(CategoriaController::verificaPreenchimento()){
        CategoriaDAO::cadastrarCategoria($_POST['txtNome']);
    }
?>