<?php
    include('class1.php');
    $teste = new Class1('guilherme',23);
    $teste2 = new Class1('joao pedro',24);

    echo $teste->getIdade();
    echo $teste2->getNome();


?>