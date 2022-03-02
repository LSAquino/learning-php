<?php

// STR_REPLACE

/*
Tal como o nome deixa claro, permite fazer substituição de strings dentro de uma string. Neste caso, substitui todas as ocorrências de uma string que existe dentro de outra string.
Vejamos um exemplo simples: 
*/

$a = "Este texto serve para testar o sistema.";
echo str_replace('te', 'TE', $a);

// EsTE TExto serve para TEstar o sisTEma.

$b = str_replace(' ', '--->', $a, 2);

// $b = 'Este--->texto--->serve para testar o sistema.'
// O quarto parâmetro é opcional, permite definir quantas substituições vão ser feitas.

// podemos usar arrays nos dois primeiros parâmetros 

$a = "Este texto serve para testar o sistema.";
$vogais = ['a','e','i','o','u', 'A','E','I','O','U'];
$b = str_replace($vogais, "", $a);

// $b = "st txt srv pr tstr  sstm.";

