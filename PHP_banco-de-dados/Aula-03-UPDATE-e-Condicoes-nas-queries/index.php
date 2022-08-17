<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo08','root','');

    $id =11;

    $sql = $pdo->prepare("UPDATE `clientes3` SET id='3' WHERE nome='murilo' and sobrenome='henrique'");
    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso id!';
    }

?>