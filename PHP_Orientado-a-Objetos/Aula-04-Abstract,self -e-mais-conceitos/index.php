<?php
    abstract class teste{

        public function func1(){
            echo 'chamando função 1';
        }

        abstract function funcaoAbstract();

        public function func3(){
            echo 'chamando função 2';
        }
    }

    class Principal2 {
        public static function outroMetodoEstatico(){
            echo 'meu outro metodo';
        }
    }


    class Principal extends teste{
            public function funcaoabstract()
            {
                echo 'Estou declarando oficialmente um metodo oficial';
            }
            public static function metodoestatico()
            {
                echo 'metodo estatico';
            }
            public function funcao()
            {
                //Principal::metodoestatico();
                //self::metodoestatico();
                Principal2::outroMetodoEstatico();
            }
    }

    $principal = new Principal();

    $principal->funcao();
    //Principal::metodoestatico();
    //$principal->func1();
    //$principal->func3();
    //$principal->funcaoabstract();
?>