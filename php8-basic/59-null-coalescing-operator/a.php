<?php

/* 

NULL COALESCING OPERATOR
 

Operador de Coalescêcia de Nulos
Funciona como um atalho para alguns casos do operador condicional ternário

*/

$x = null;
$nome = $x ?? 'Sem nome';

// Este exemplo é semelhante a:

$nome1 = isset($x) ? $x : 'Sem nome';

// Portanto, se x for null, então é atribuído o valor definido
// à frente dos dois sinais de interrogação.

/*
A partir do php 7.4, foi acrescentado o operador de atribuição a seguir ao operador de coalescência.
*/

$apelido = null;
$apelido ??= 'Apelido desconhecido.';
// neste caso apelido == 'Apelido desconhecido.'

echo $nome;
echo '<br>';
echo $apelido;