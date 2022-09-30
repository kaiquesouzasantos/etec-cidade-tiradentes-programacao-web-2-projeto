<?php
    spl_autoload_register("carregarClasse");

    function carregarClasse($nomeClasse){
        $caminhos = array(
            "/model/", "/controller/",
            "/dao/connect/", "/dao/class/"
        );
           
        foreach ($caminhos as $caminho){
          $classe = __DIR__.$caminho.$nomeClasse.".php";
          
          if(file_exists($classe)){
            require($classe);
          }
        }
    }
?>
