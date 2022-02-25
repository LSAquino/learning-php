<?php

# TYPE CONVERSIONS

/*
Embora o PHP procure automaticamente fazer uma conversão de dados entre diferentes tipos, é uma boa prática explicitar isso no código.
Uma variável do tipo int não é o mesmo que uma string e vice-versa.
*/

$my_boolean = true;
echo $meu_booleano; // resulta numa string vazia.
// echo (int)$meu_booleano;

/*
Designamos esta operação como conversão explícita (explicit cast)
Podemos fazer converter os principais tipos de valores
(string), (int), (float), (array), etc.

Vejamos o caso da conversão de um array num objeto
*/

$nomes = [
    'Joao',
    'Ana',
    'Carlos'  
];

$nomes1 = (object)$nomes;
echo '<pre>';
print_r($nomes1);

// Por exemplo, podemos converter uma variavel num array com um unico valor
$nome = 'Joao';
$os_nomes = (array)$nome;
print_r($os_nomes);