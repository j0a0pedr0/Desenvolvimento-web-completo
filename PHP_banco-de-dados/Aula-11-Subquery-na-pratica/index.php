<?php

    $pdo = new PDO('mysql:host=localhost;dbname=aula_11','root','');

    $select = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'comedia')");
    
    $select->execute();

    echo '<pre>';
    print_r($select->fetchAll(PDO::FETCH_ASSOC));
    echo '<pre/>';

?>