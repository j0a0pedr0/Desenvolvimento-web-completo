<?php

    $pdo = new PDO('mysql:host=localhost;dbname=aula_11','root','');


    /*     RECUPERAR UMA TABELA NO BANCO DE DADOS
    $tables = $pdo->query("SHOW TABLES");
    $tables = $tables->fetchAll();

    echo '<pre>';
    print_r($tables);
    echo '<pre/>'
    */

    $sql = 'CREATE TABLE cursos232232 (
        id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome_curso VARCHAR(30) NOT NULL
    )';

    $pdo->exec($sql);

?>