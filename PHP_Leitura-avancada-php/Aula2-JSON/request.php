<?php
    $arr = ['nome'=>'João Pedro','cidade'=>'São Paulo','Idade'=>'24'];
    $json = '{"a":1,"b":{"0":"joao","1":"Paulo"},"c":3,"d":4,"e":5}';
    $json = json_encode($arr);
    echo $json;

?>