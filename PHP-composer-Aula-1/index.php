<?php
    require('vendor/autoload.php');
    use Carbon\Carbon;

    date_default_timezone_set('America/Sao_Paulo');

    $amanha = Carbon::now()->addDay();

    echo date('d/m/Y h:i:s',strtotime($amanha));