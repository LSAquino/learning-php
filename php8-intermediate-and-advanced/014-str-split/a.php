<?php

// STR_SPLIT

/*
Permite criar um array de caracteres a partir de uma string.
*/

$a = "Frase de testes";
$b = str_split($a);

/*
Array

[0] => F
[1] => r
[2] => a
[3] => s
[4] => e
[5] =>  
[6] => d
[7] => e
[8] =>  
[9] => t
[10] => e
[11] => s
[12] => t
[13] => e

*/

/*
Podemos usar um segundo argumento, opcional, para definir o número de caracteres de cada valor do array criado.
*/

$a = "Frase de testes";
$b = str_split($a, 3);

/*
Array
[0] => Fra
[1] => se 
[2] => de 
[3] => tes
[4] => tes

*/

// IMPORTANTE: Tal como muitas outras funções string do php, há que ter cuidado com string multibyte. Neste caso podemos usar mb_str_split