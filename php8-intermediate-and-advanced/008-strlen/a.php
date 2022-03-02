<?php

// COMO CONTAR O NÚMERO DE CARACTERES DE UMA STRING

/*
Muitas vezes vamos necessitar calcular o número de caracteres de uma string.
Com muita frequência recorremos rapidamente ao uso da função strlen
*/

$a = "uma frase para testes.";

$comprimento = strlen($a); // $comprimento = 22

echo strlen($a); // 22

// -------------------------------------
// quando uma variável é nula ou vazia
$c = '';

echo strlen($b); // 0
echo strlen($c); // 0 

// -------------------------------------
// quando uma variável é booleana
$sim = true;
$nao = false;
echo strlen($sim); // 1
echo strlen($sim); // 1

// --------------------------------------
// quando uma variável é numérica
$numero = 1250;
echo strlen($numero); // 4 (conversão implícita)

// --------------------------------------
// quando uma variável é um array
$nomes = ['ana', 'carlos','miguel'];
// echo strlen($nomes); // gera um erro

# Para caracteres com acentos, ele é considerado um caracter a mais. Caso não queira que o acento conte como caracter, deve-se usar a função MB, ou seja, mb_strlen