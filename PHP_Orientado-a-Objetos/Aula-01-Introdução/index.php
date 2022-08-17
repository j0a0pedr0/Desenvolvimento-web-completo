<?php

    class Pessoa{
        //Objeto pessoa

        private $none = 'Guilherme';
        private $idade = '23';
        private $peso = '70kg';

        public function crescer(){
            echo 'estou crescendo!';
            echo '<br/>';
            $this->comer();
        }

        private function comer(){
            echo 'estou comendo';

        }
    }

    //Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();



?>