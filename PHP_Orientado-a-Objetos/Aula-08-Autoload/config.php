<?php

function myAutoLoad($class){
    $class = str_replace('\\','/',$class);
    echo $class;
    if(file_exists('class/'.$class.'.php')){
        include('class/'.$class.'.php');
    }
}

spl_autoload_register('myAutoLoad');


?>