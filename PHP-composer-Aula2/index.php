<?php
/*
    $date = new DateTime('2022-08-12 12:43:32');
    $date->add(new DateInterval('P1M'));
    echo $date->format('Y-m-d H:i:s');
*/
    /*$date = DateTime::createFromFormat('j-M-Y', '12-Ago-2000');
    echo $date->format('Y-m-d');*/

    date_default_timezone_set('America/Sao_paulo');

    /*$date = DateTime::createFromFormat('j-M-Y', '15-Feb-2009');
    echo $date->format('Y-m-d');
    */

    //echo 'Fuso-Horario=>'.date_default_timezone_get().'e esse é a Hora Atual'.time();
    /*$oneHour = time() + (60*60);
    echo date('H:i:s',$oneHour);*/

    
    
    /*$date = new DateTime();

    $date->setDate(2022,20,29);
    $oneHour = time() + (60*60);

    echo $date->format('Y-m-d')."\n";
    $date->add(new DateInterval('P1M'));
    echo $date->format('Y-m-d')."\n";
    $date->add(new DateInterval('P2M'));
    echo $date->format('Y-m-d H:i:s');*/

    /*
    $date = date_create('2002-03-12');
    //$date = new DateTime;
    //$date = date('Y-m-d H:i:s');
    date_time_set($date, 14,34);
    echo date_format($date,'Y-m-d H:i:s');
    */

    $date = getDate();

    echo $date['year'].' - '.$date['month'].' - '.$date['mday'].' - '.$date['weekday'];

?>