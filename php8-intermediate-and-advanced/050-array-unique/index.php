<?php

// ARRAYS - REMOVER REGISTROS DUPLICADOS

/*
Vamos imaginar que nos é enviado um ficheiro que contem nomes e carregamos esses nomes para um array. Queremos, contudo, remover nomes duplicados. Como fazer?
*/

$nomes = ['joao', 'ana', 'carlos', 'joao', 
          'sara','maria', 'ana', 'antonio'];

/*
Poderíamos ir carregando cada um dos nomes para um array e verificando se o nome já existia no array para não adicionar. No entanto, existe uma forma mais simples: carregamos todos os nomes e depois vamos usar a função array_unique
*/

$final = array_unique($nomes);

print_r($final);

// Atenção aos resultados imprevisíveos
$valores = ['100','+100','1000','0200','200'];
// $final = array_unique($valores, SORT_NUMERIC);
$final = array_unique($valores, SORT_STRING);
print_r($final);