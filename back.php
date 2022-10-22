<?php

$pessoa['nome'] = $_POST ['nome']; 
$pessoa['genero'] = $_POST ['genero']; 
$pessoa['data'] = $_POST ['data'];
$pessoa['telefone'] = $_POST ['telefone']; 
$pessoa['email'] = $_POST ['email']; 

$variavel = json_encode($pessoa);
$armazem = fopen(filename:"teste.txt", mode:'a');
fwrite($armazem, $variavel .PHP_EOL );

fclose($armazem);
?>