<?php 
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL,"https://swapi.dev/api/people/?page=2");
    //curl_setopt($curl, CURLOPT_POST, 1);

    //curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request'=>'name_return')));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_output = json_decode(curl_exec($curl));
    
    curl_close($curl);

    foreach($server_output->results as $ator){
        //var_dump($ator);
        echo "Nome: ". $ator->name ."<br>";
        echo "Cor dos olhos: ". $ator->eye_color."<br>";
        echo '<hr>';
        
    }



   /* echo '<pre>';
     //var_dump ($server_output);
     //var_dump($server_output->results);
     echo $server_output->height;
    echo '</pre>';
    */
    //$resultados = json_decode($server_output);

    //echo $resultados->titulo[1];
    //echo '<br>';
    //echo $resultados->conteudo[1];
?>