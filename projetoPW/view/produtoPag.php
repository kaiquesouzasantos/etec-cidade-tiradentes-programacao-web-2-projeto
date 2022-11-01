<?php 
    setcookie('categoriaProduto', $_GET['categoria']); 
    header("Location: index.php#produtos");
?>