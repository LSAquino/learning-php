<?php

#alterar valores do array

$valores = [10, 20, 30];

$valores[1] = 2000; #$valores = [10, 2000, 30];

// podemos também ignorar o índice para adicionar um novo elemento no array
$valores[] = 300; # $valores = [10, 2000, 30, 3000];

// ou de outra forma...
array_push($valores, 5000); # $valores = [10, 2000, 30, 3000, 5000];

// para aprender valores de um array numa string, podemos fazer da seguinte forma:
echo 'Os valores são: ' . $valores[0] . 'e' . $valores[1];
// ou
echo "Os valores são: $valores[0] e $valores[1]";
