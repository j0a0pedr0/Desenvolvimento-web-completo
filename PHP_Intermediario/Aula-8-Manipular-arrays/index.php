<?php
//Array_MERGE serve para unir 1 ou mais arrays;
/*
$array1 = array("cor"=> "vermelho",2, 4);
$array2 = array("a","b", "cor" => "verde","forma" => "trapezoide",4);
$result = array_merge($array1, $array2);
print_r($result);
*/

//array intersect key serve para retornar valores com a mesma chave em 1 ou mais arrays.
/*
$array1 = array("chave1"=>"valor1","chave2"=>"valor2");
$array2 = array("chave1"=>"valor 121","chave2"=>"outro valors","chave3"=>"chave3","chave4"=>"chave4");

print_r(array_intersect_key($array1,$array2));
*/

//array map serve para aplicar uma funcao em todos os valores do array.
$arr = ['<p>guilherme</p>','joao','<h2>fabricio</h2>'];

print_r(array_map('strip_tags',$arr));

?>