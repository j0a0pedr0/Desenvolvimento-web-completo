<?php
    /*
    include('index2.php');

    class Cachorro
    {
        
        public function __construct()
        {
            echo 'Classe cachorro';
            echo '<br/>';
        }
    }

    class Gato
    {

        public function __construct()
        {
            echo 'Classe gato';
            echo '<br/>';
        }
    }

    class Animal
    {
        public static function build($nomeClasse)
        {
            if(class_exists($nomeClasse))
            {
                return new $nomeClasse;
            }else
            {
                die('ops! A classe nao existe');
                die('<br/>');
            }
            
        }
    }

    Animal::build('gato');
    Animal::build('mamiferos');
    Animal::build('peixe');
    */


    //Adicionar/Fechar Carrinho - Carrinho
    //Calcular Frete - Frete
    //Fechar Pedido - Pedido

    class Carrinho{

            public function fecharCarrinho(){

            }
    }

    class Frete{
            public function calcularFrete(){
                
            }
    }

    class Pedido{

            public function fecharPedido(){
                
            }
    }

    class Loja{

            public function finalizarCompra(){
                echo 'compra finalizada!';
            }
    }

    $loja = new Loja();
    $loja->finalizarCompra();
?>