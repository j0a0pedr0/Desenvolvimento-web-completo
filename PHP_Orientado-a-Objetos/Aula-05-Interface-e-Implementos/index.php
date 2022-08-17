<?php

    include('Interface1.php');

    class Teste implements Interface1{

        public function printOnscreen($par){
            echo $par;
        }
    }

    $teste = new Teste;
    $teste->printOnscreen('Olá mundão');

?>