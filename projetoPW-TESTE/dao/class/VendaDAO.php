<?php
    require_once("../../router.php");

    class VendaDAO {
        private static function getConexao(){
            return Conexao::getConexao();
        }
    }
?>