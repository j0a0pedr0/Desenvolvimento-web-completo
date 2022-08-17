<?php

    $var1 = 'valor1';
    $var2 = 'valor2';
    $var3 = 'valor1';

    /*
    if(($var1 == $var2) && ($var2 == $var3)){
        echo 'verdade';
    }else{
        echo 'mentira';
    }
    */

    if($var1 == $var2 || $var1 == $var3){
        echo 'verdade ou mentira';
    }


?>