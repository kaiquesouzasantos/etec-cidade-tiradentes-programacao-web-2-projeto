<?php
    class Cliente{
        private 
            $codCliente, $nomeCliente, $cpfCliente, $emailCliente, $senhaCliente, 
            $logradouroCliente, $numLogCliente, $complementoCliente, 
            $bairroCliente, $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $atividade;

        public function construct_min(
            $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
            $numLogCliente, $complementoCliente, $bairroCliente,
            $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $senhaCliente
        ){
            $this->nomeCliente = $nomeCliente;
            $this->cpfCliente = $cpfCliente;
            $this->emailCliente = $emailCliente;
            $this->logradouroCliente = $logradouroCliente;
            $this->numLogCliente = $numLogCliente;
            $this->complementoCliente = $complementoCliente;
            $this->bairroCliente = $bairroCliente;
            $this->cidadeCliente = $cidadeCliente;
            $this->ufCliente = $ufCliente;
            $this->cepCliente = $cepCliente;
            $this->imgCliente = $imgCliente;
            $this->senhaCliente = $senhaCliente;
        }

        public function construct_full(
            $codCliente, $nomeCliente, $cpfCliente, $emailCliente,
            $logradouroCliente, $numLogCliente, $complementoCliente,
            $bairroCliente, $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $senhaCliente
        ){
            $this->codCliente = $codCliente;
            $this->construct_min(
                $nomeCliente, $cpfCliente, $emailCliente, $logradouroCliente,
                $numLogCliente, $complementoCliente, $bairroCliente,
                $cidadeCliente, $ufCliente, $cepCliente, $imgCliente, $senhaCliente
            );
        }

        public function setCodCliente($codCliente){$this->codCliente = $codCliente;}
        public function getCodCliente(){return $this->codCliente;}

        public function setNomeCliente($nomeCliente){$this->nomeCliente = $nomeCliente;}
        public function getNomeCliente(){return $this->nomeCliente;}

        public function setCpfCliente($cpfCliente){$this->cpfCliente = $cpfCliente;}
        public function getCpfCliente(){return $this->cpfCliente;}

        public function setEmailCliente($emailCliente){$this->emailCliente = $emailCliente;}
        public function getEmailCliente(){return $this->emailCliente;}

        public function setSenhaCliente($senhaCliente){$this->senhaCliente = $senhaCliente;}
        public function getSenhaCliente(){return $this->senhaCliente;}

        public function setLogradouroCliente($logradouroCliente){$this->logradouroCliente = $logradouroCliente;}
        public function getLogradoruroCliente(){return $this->logradouroCliente;}

        public function setNumLogCliente($numLogCliente){$this->numLogCliente = $numLogCliente;}
        public function getNumLogCliente(){return $this->numLogCliente;}

        public function setComplementoCliente($complementoCliente){$this->complementoCliente = $complementoCliente;}
        public function getComplementoCliente(){return $this->complementoCliente;}
        
        public function setBairroCliente($bairroCliente){$this->bairroCliente = $bairroCliente;}
        public function getBairroCliente(){return $this->bairroCliente;}

        public function setCidadeCliente($cidadeCliente){$this->cidadeCliente = $cidadeCliente;}
        public function getCidadeCliente(){return $this->cidadeCliente;}

        public function setUfCliente($ufCliente){$this->ufCliente = $ufCliente;}
        public function getUfCliente(){return $this->ufCliente;}

        public function setCepCliente($cepCliente){$this->cepCliente = $cepCliente;}
        public function getCepCliente(){return $this->cepCliente;}

        public function setImgCliente($imgCliente){$this->imgCliente = $imgCliente;}
        public function getImgCliente(){return $this->imgCliente;}

        public function setAtividadeCliente($atividade){
            if($atividade == 1){
                $this->atividade = "ATIVO";
            } else {
                $this->atividade = "INATIVO";
            }
        }
        public function getAtividadeCliente(){return $this->atividade;}
    }
?>
