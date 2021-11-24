<?php 
    class Pessoa {

        private $nome;
        private $idade;
        private $genero;

        // public function Pessoa($dados) {
        //     $this->setNome($dados->nome);
        //     $this->setIdade($dados->idade);
        //     $this->setGenero($dados->genero);
        // }
        
        public function Pessoa($nome, $idade, $genero) {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setGenero($genero);
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setIdade($idade) {
            $this->idade = $idade;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }
    }
?>