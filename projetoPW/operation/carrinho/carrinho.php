<?php 
    if(!VendaDAO::verificaCarrinho($_POST['codCliente'])){
        VendaDAO::cadastrarCarrinho($_POST['codCliente']);
    } else{
        
    }
?>