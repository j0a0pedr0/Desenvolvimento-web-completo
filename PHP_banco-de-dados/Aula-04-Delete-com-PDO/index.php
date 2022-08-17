<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo08','root','');

    $id =9;

    $sql = $pdo->prepare("DELETE FROM `clientes3` WHERE id=?");
    
    if($sql->execute([$id])){
        echo 'Meu cliente foi DELETADO com sucesso id!';
    }

?>