<?php
    require_once("../../router.php");

    if(ClienteController::verificaPreenchimento()){
        ClienteDAO::cadastrarCliente(
            $_POST['nomeCliente'], $_POST['cpfCliente'], $_POST['emailCliente'],
            $_POST['logradouroCliente'], $_POST['numeroCliente'], $_POST['complementoCliente'],
            $_POST['bairroCliente'], $_POST['cidadeCliente'], $_POST['UFCliente'],
            $_POST['CEPCliente'], ClienteController::getDestino(), $_POST['senhaCliente']
        );
    }

    header("Location: ../../view/index.php");
?>