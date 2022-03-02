<?php

// STRPOS - permite encontrar a posição da primeira ocorrência de uma string dentro de outra string

$a = "Esta frase serve para testes";
$pos = strpos($a, 'se'); // 8

/*
A Haystack é a string onde vamos procurar a posição
A needle é a string cuja posição pretendemos obter dentro da string
Offer é uma parâmetro opcional que permite definir a partir de onde é efetuada a pesquisa
*/

//              111111111
//    0123456789012345678 
$a = "Este frase serve para testes";
$pos = strpos($a, 'se', 10); //11 

$a = "Esta frase 100 serve para testes";
$pos = strpos($a, 100); //11, porém, a partir do php 7.3 não se pode mais passar um needle que não seja string, apresenta um erro 

// ---------------------------------------------
$a = "Esta frase 100 serve para testes";
$pos = strpos($a, (string)100); // jeito correto

// se o valor procurado não for encontrado, devolve false como resultado

/*
Neste caso, temos o problema de termos um resultado zero (0) ou um resultado false (0)
Como vamos resolver? É aconselhavel usar o operador === quando testamos o resultado desta função
*/
$a = "Este frase serve para testes";
if (mb_strpos($a, 'abc') === false) {
    echo 'nao existe';
} else {
    echo 'existe';
}
