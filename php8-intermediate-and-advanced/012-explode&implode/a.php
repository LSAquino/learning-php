<?php

// EXPLODE E IMPLODE

/*
A utilização de arrays como coleções de dados é algo praticamente presente em todas as aplicações de php. Existem funções de strings também relacionadas com arrays, e estas duas são um exemplo disso.
*/


// -----------------------------------
// EXPLODE
/*
Permite trasnformar uma string num array de strings, recorrendo a um caracter de separação
*/

$str_nomes = 'joao, carlos, ana, antonio';
$nomes = explode(',', $str_nomes);

// $nomes = ['joao','carlos','ana','antonio'];

/*
existe um terceiro parâmetro que, sendo usado, define a quantidadde máxima de elementos que o array $nomes vai ter. Não sendo especificado, $nomes vai conter o número máximo de valores possível.
*/

$str_nomes = 'joao,carlos,ana,antonio'; 
$nomes = explode (',', $str_nomes, 2);

// $nomes = ['joao', 'carlos,ana,antonio']
// se o caracter de separação for vazio, a função retornará false

// --------------------------------
// IMPLODE
/*
permite "colar" numa string um conjunto de elementos de um array:
*/

$nomes = ['joao','carlos','ana','antonio'];
$str_nomes = implode('|', $nomes);

// $str_nomes = 'joao|carlos|ana|antonio'

// em versões anteriores ao PHP  