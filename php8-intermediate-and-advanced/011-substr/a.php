<?php

// SUBSTR

/*
A função substr (substring) é usada com muita frequência para capturarmos uma parte de uma string, seja para criar uma nova variável ou simplesmente para apresentar uma parte de uma string. Acontece que esta função tem muito mais nuances do que habitualmente estamos habituados a usar.
*/

$a = "Esta frase é para testes.";
$b = substr($a,5,10); // $b = 'frase é p';

/* 
Se verificarmos o que aconteceu, a variável b apenas ficou com  caracteres e não com os 10 a partir da posição 5.
Mais uma vez teremos que usar a versão mb_substr()
Independente desse pormenor, as assinaturas são idênticas.

A primeira é a string relativamente à qual pretendemos obter uma parte
A segunda é o índice a partir do qual pretendemos captar uma parte da string
A terceira define o número de caracteres a capturar a partir do índice.
*/

$c = mb_substr($a, 0, 3);  //'Est'
$d = mb_substr($a, 10);  //'é para testes'

/*
se usarmos o índice com um valor negativo, então vamos pedir à função que extraia a partir do fim.
*/

$c = mb_substr($a, -4, 2);  //'te'
$c = mb_substr($a, -3);  //'es'

/*
Podemos também usar o terceiro parâmetro com um valor negativo.
Neste caso, será captada a parte da string a partir do índice, mas excluindo o número de caracteres no final equivalente ao valor negativo.
*/

$a = 'abcdefghijklmnop';
$g = substr($a,8,-3); //'ijklm'


/*
Esta função devolve a string, n caso de não existir um erro.
*/

$a = 'abd';
$b = substr($a, 5);

echo $b; //''


