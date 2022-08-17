<?php
    //Ler arquivo XML
    /*$xml = simplexml_load_file('arquivo.xml');
    echo '<pre>';
    print_r($xml->informacoes->item->title[2]);
    echo '</pre>';*/
    //echo $xml->informacoes->item->idade;
    

    /*
    $test_array = array (
        'multi-milionario' => 'condicao',
        '300' => 'QI',
        'Senior'=> 'nivel_programador',
        'another_array' => array (
          'stack' => 'overflow',
        ),
    );
    $xml = new SimpleXMLElement('<jp/>');
    array_walk_recursive($test_array, array ($xml, 'addChild'));
    file_put_contents('arquivo5.xml',$xml->asXML());

    $content = simplexml_load_file('arquivo5.xml');
    echo $content->nivel_programador;*/

    escreverXml(array('Joao'=>'Nome','Musculacao,Corrida,Surf'=>'Esportes','24'=>'Idade'),'arquivo7.xml');

    $contents = simplexml_load_file('arquivo7.xml');

    echo $contents->Esportes;

    function escreverXml($arr,$nomeArquivo){

        $xml = new SimpleXMLElement('<jp/>');
        array_walk_recursive($arr, array ($xml, 'addChild'));
        file_put_contents($nomeArquivo,$xml->asXML());
    }

?>