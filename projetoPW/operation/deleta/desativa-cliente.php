<?php
    require_once("../../router.php");

    if(isset($_GET['codCliente'])){
        ClienteDAO::inativaAtividadeCliente($_GET['codCliente']);
    }

    header("Location: ../../view/dashboard/pages/forms/listagem-cliente.php");
?>