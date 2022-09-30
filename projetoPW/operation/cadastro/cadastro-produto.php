<?php
    require_once("../../router.php");

    if(ProdutoController::verificaPreenchimento()){
        ProdutoDAO::cadastrarProduto(
            $_POST['txtNome'], $_POST['txtPreco'], $_POST['txtDescricao'],
            $_POST['slCategoria'], ProdutoController::getDestino()
        );
    }
?>