<?php

// Podemos comparar strings da seguinte forma;

$a = 'Joao';
$b = 'Carlos';

$c = ($a == $b); // false
$d = ($a != $b); // true

// Existem muitas funções nativas no PHP para operar com strings
// Exemplos:

$frase = 'Esta frase tem 29 caracteres.';

// retorna o número de caracteres da string
$numero_caracteres_total = strlen($frase);

// retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4); # Esta

// converte toda a string em letras maísculas
$todas_maiusculas = strtoupper($frase);

// converte em letras minúsculas 
$todas_minusculas = strtolower($frase);

// substituir uma letra por outra
$nova_frase = str_replace('a','x',$frase);#estx frxse tem 29 cxrxcteres.

// verifica qual é a posição de um caracter dentro da string
$posicao = strpos($frase, 'a'); #3

// https://www.php.net/manual/pt_BR/ref.strings.php