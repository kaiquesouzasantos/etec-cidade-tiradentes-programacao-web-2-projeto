<?php

    class Cliente{
        private 
            $id, $nome, $cpf, $email, $senha, 
            $logradouro, $numLog, $complemento, 
            $bairro, $cidade, $uf, $cep;

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }

        public function getLogradoruro(){
            return $this->logradouro;
        }

        public function setNumLog($numLog){
            $this->numLog = $numLog;
        }

        public function getNumLog(){
            return $this->numLog;
        }

        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }

        public function getComplemento(){
            return $this->complemento;
        }
        
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function getBairro(){
            return $this->bairro;
        }

        public function setCidade($cidade){
            $this->cidade = $cidade;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function setUf($uf){
            $this->uf = $uf;
        }

        public function getUf(){
            return $this->uf;
        }

        public function setCep($cep){
            $this->cep = $cep;
        }

        public function getCep(){
            return $this->cep;
        }
    }
?>