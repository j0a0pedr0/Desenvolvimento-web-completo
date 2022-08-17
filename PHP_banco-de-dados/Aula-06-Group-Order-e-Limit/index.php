<?php
    $pdo = new PDO("mysql:host=localhost;dbname=aula_06","root","");

    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome ASC ");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach($clientes as $key => $value){

        echo $value['nome'];
        echo '<hr/>';
    }

?>