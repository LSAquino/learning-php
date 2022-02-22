<?php

// ARRAYS

// Um array é uma coleção constituída por chaves/índices e valores.
// as chaves/índices podem ser numéricos (array numerico) ou strings (array associativo.), e podem coexistir os dois tipos de índices no array.
// Os valores podem ser de qualquer tipo, inclusive serem outros arrays

// Exemplos

$valores = array(1, 2, 3, 10, 20, 30);
$nomes = array('joao', 'ana', 'carlos');

// a partir do PHP 5.4, passou a ser possivel escrever os arrays de forma mais simplificada

$valores = [1, 2, 3, 10, 20, 30];
$nomes = ['joao', 'ana', 'carlos'];

// Estes arrays são de índice numérico.
// Para apresentar um dos seus valors, procedemos da seguinte forma: 
echo $valores[0]; #1
echo $nomes[1]; #ana

// não tem obrigatoriedade de ter chaves sequenciais
$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000,
];

// se adicionarmos um novo elemento no final da coleção, ele vai assumir o último índice + 1
$dados[] = 4000; # 31 => 4000