<?php
    require_once("../../router.php");

    if(isset($_GET['codCategoria'])){
        CategoriaDAO::deletaCategoria($_GET['codCategoria']);
    }

    header("Location: ../../view/dashboard/pages/forms/cadastro-categoria.php");
?>