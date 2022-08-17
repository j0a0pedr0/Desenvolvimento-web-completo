<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=aula_09','root','');

$sql = $pdo->prepare("SELECT * FROM clientes WHERE `data` BETWEEN '2022-01-01' AND '2022-12-01'");

$sql->execute();

$emails = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($emails);
echo '<pre/>';

?>