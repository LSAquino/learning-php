<?php

// CONCATENAÇÃO DE STRINGS
// É o processo que, através do código, permite juntar várias strings
// Existem dois tipos de operadores de concatenação:

// # .
// # .=

$a = 'Joao' . ' ' . 'Ribeiro'; # o ponto liga as diferentes strings

$b = 'Joao';
$b .= ' '.'Ribeiro'; # .= faz uma concantenação com o valor já existente na string.

echo $b;
die();



// a diferença entre strings delimitadas por ' e por " é que, no segundo caso, podemos fazer o seguinte:

$nome = 'Joao';
$apelido = 'Ribeiro';
$nome_completo = "$nome $apelido";
echo $nome_completo;

// Ao contrário das ", nas strings ' as variáveis não são interpretadas relativamente ao seu valor (Parse)