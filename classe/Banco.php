<?php 
    require_once "./classe/ContaBancaria.php";
    require_once "./classe/Pessoa.php";

    class Banco {

        private $clientes;

        public function Banco () {
            $this->iniciaListaClientes();
            $this->iniciaBanco();
        }

        public function iniciaBanco() {
            $pessoa1 = new Pessoa("Rodrigo Santigo", 22, "Masculino");
            $pessoa2 = new Pessoa("Santigo", 21, "Masculino");
            $pessoa3 = new Pessoa("Santiro", 18, "Masculino");

            $conta1 = new ContaBancaria("cc", $pessoa1, 5000);
            $conta2 = new ContaBancaria("cp", $pessoa2);
            $conta3 = new ContaBancaria("cc", $pessoa3, 100);

            $this->addClientes($conta1);
            $this->addClientes($conta2);
            $this->addClientes($conta3);
        }

        public function iniciaListaClientes() {
            $this->clientes = array();
        }

        public function addClientes($cliente) {
            $this->clientes[] = $cliente;
        }

        public function listaClientes() {
            foreach ($this->clientes as $cliente) {
                print_r($cliente);
            }
        }
    }


?>