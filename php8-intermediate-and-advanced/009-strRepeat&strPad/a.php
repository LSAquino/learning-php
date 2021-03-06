<?php

/*
O PHP contém uma função muito simples de usar para criar strings como um determinado número de repetições concatenadas.
*/

$a = str_repeat('-', 20); // $a = "--------------------"

$b = str_repeat('=|', 20); // $a = "=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|"

// Poderíamos pensar num sistema destes para apresentar linhas com valores do tipo
/*
...........100
..........2100
.............0
.........45790
*/
// no entanto necessitaríamos de mais lógica de programação

// Para resolver esta questão, existe a função str_pad

$valor = 100;
echo str_pad($valor, '30','.', STR_PAD_LEFT);

/*
pad_type:
STR_PAD_LEFT
STR_PAD_RIGHT
STR_PAD_BOTH
*/

// é uma função particularmente interessante para sistemas de logs
// onde os caracteres são monospaced.



