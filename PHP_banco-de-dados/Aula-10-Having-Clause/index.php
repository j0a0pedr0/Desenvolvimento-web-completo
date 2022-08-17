<?php
    $pdo = new PDO('mysql:host=localhost;dbname=Aula_10','root','');

    $select = $pdo->prepare("SELECT * FROM clientes10 GROUP BY cargo HAVING pontos > 5");

    $select->execute();

    echo '<pre>';
    print_r($select->fetchAll());
    echo '<pre/>';


?>