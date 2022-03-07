<?php

// ARRAYS - PRIMEIRA E ÚLTIMA CHAVE DE UM ARRAY

// $valores = [1,2,3,4,5];
// $valores = ['joao','ana','carlos'];
$valores = [
    'administrador' => 'joao',
    'contabilista' => 'carlos',
    'financeiro' => 'ana'
];

echo $valores[array_key_first($valores)] . PHP_EOL;
echo $valores[array_key_last($valores)];