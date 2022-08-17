<?php
    function mostrarNome($idade){
        $nome = 'Joao Pedro';
        echo '<h2>Seu Nome é '.$nome.'</h2>';
        echo '<hr>';
        echo "Idade:$idade";
    }
function calculadora($numero1 = 10,$numero2 = 5){
     return ($numero1+$numero2);
}

   // echo calculadora();
   // mostrarNome(24);

   function retornarString(){
       return 'Guilherme';
   }

   echo retornarString();




?>