<?php
    require_once("../../router.php");

    if(isset($_GET['codProduto'])){
        ProdutoDAO::deletaProduto($_GET['codProduto']);
    }

    header("Location: ../../view/dashboard/pages/forms/cadastro-produto.php");
?>