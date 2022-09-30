<?php 
    session_start();
    if( ($_SESSION['user-session'] != "adm") || ($_SESSION['senha-session'] != "123") ){
        header("Location: ../../index.php");
    }
?>