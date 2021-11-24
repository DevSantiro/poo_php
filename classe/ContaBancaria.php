<?php 
    require_once "./classe/Pessoa.php";

    class ContaBancaria {

        private $tipoConta;
        private $proprietarioConta;
        private $saldo;

        public function ContaBancaria ($tipoConta, $proprietarioConta, $saldo = 0) {
            $this->setTipoConta($tipoConta);
            $this->setProprietarioConta($proprietarioConta);
            $this->setSaldo($saldo);
        }


        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function setTipoConta($tipoConta) {
            $this->tipoConta = $tipoConta;
        }

        public function setProprietarioConta($proprietarioConta) {
            $this->proprietarioConta = $proprietarioConta;
        }
    }

?>