<?php
    include('exemplo.class.php');
    //Instancia de objeto!
    $exemplo = new Exemplo();
    $exemplo->setVar1('João Pedro  <br/>');
    echo $exemplo->pegaVar1();
    //$exemplo->var2 = 'ola';
    
    //echo $exemplo->var2;


    $exemplo2 = new Exemplo();
    $exemplo2->setVar1('Guilherme');
    echo $exemplo2->pegaVar1();
    //$exemplo2->var2 = 'joão';
    /*
    echo $exemplo->var2;
    echo '<br/>';
    echo $exemplo2->var2;
    */

    //echo Exemplo::$var3;

    //Exemplo::metodoStatico();
?>