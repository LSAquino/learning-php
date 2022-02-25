<?php

// VAR_DUMP

/*
Tem um resultado semelhante ao print_r, mas para além dos valores apresenta também a informação sobre os tipos de valores 
*/

echo '<pre>';
$nome = "Joao";
var_dump($nome);

echo '<br>';

$valores = [1,2,3];
var_dump($valores);