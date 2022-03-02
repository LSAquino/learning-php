<?php

// STRRPOS
/*
str r pos - procura a última ocorrência de uma string dentro da outra


A Haystack é a string onde vamos procurar a posição
A needle é a string cuja posição pretendemos obter dentro da string
Offer é uma parâmetro opcional que permite definir a partir de onde é efetuada a pesquisa

*/

$a = "Esta frase serve para testes.";
$pos = strrpos($a,'se'); // 11 (seria 8 com strpos)

// Se pretendemos fazer a mesma pesquisa, mas por case insensitive, usamos as funções stripos e strripos