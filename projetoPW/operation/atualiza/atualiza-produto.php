<?php
    require_once("../../router.php");

    if(ProdutoController::verificaPreenchimento()){
        ProdutoDAO::atualizarProduto(
            $_POST['codigoProduto'], $_POST['nomeProduto'], $_POST['precoProduto'], $_POST['descricaoProduto'],
            $_POST['quantidadeProduto'], $_POST['codigoCategoria'], ProdutoController::getDestino()
        );
    }

    header("Location: ../../view/dashboard/pages/forms/cadastro-produto.php");
?>