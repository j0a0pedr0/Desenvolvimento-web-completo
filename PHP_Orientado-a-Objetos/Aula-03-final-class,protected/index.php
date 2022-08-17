<?php

    class Filha{

        protected function Teste(){
            echo 'Teste realizado';
        }
        private function TestePrivate(){
            echo 'Teste realizado 2020';
        }

        public function mostrarOla(){
            echo 'Ola mundo';
            echo '<br/>';
            $this->TestePrivate();
        }
    }

    class Pai extends Filha{

        public function mostrarOla(){
            parent::mostrarOla();
            echo '<br/>';
            echo 'Nova Funcao';
        }

        public function mostrarTchau(){
            echo 'Tchau Mundo!';
            echo '<br/>';
            echo $this->Teste();
        }

    }

    $pai = new Pai;
    //$pai->mostrarTchau();

    $pai->mostrarOla();
    //$filha = new Filha;
   // $filha->mostrarOla();

?>