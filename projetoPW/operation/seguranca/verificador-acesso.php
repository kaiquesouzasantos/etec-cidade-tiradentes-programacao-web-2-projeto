<?php 
    require_once("../../router.php");

    $user = $_POST['txtUser'];
    $senha = $_POST['pwSenha'];

    if(($user == "adm") && ($senha == "123")){
        session_start();
        $_SESSION['user-session'] = $user;
        $_SESSION['senha-session'] = $senha;

        header("Location: ../../view/dashboard/index.php");
    }else{
        header("Location: ../../index.php");
    }
?>