<?php

// ARRAYS - ALTERAR VALORES DE UM ARRAY COM ARRAY_MAP

$nomes = [
    'joao', 'ana', 'carlos'
];

$final = array_map("saudacao", $nomes);
print_r($nomes);

function saudacao ($valor)
{
    return "Olá, $valor.";
}

// die();

// $valores = [1,2,3,4,5,6,7,8,9,10];
// print_r(array_map("elevar_ao_quarado",$valores));

// function elevar_ao_quadrado($valor)
// {
//     return $valor * $valor;
// }