<?php

// a definição de um array pode ser feita de várias formas:

$nomes1 = array('a', 'b', 'c');
$nomes2 = ['a', 'b', 'c']; // desde o PHP 5.4
$nomes3[] = 'joao';

print_r($nomes3);

$cliente1 = [
    'nome' => 'Carlos',
    'idade' => 35,
    'profissao' => 'Advogado'
];
print_r($cliente1);

$cliente2['nome'] = 'Joao';
print_r($cliente2);
