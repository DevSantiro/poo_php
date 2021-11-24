<?php
    class Cliente {
        
        private $conta;

        public function Cliente($conta) {
            $this->setConta($conta);
        }

        public function setConta($conta) {
            $this->conta = $conta;
        }
    }

?>