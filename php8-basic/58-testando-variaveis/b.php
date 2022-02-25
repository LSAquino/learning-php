<?php

# TESTANDO VARIÁVEIS

#IS_NULL

/*
Verifica se uma variável tem valor null ou não
*/

$b = 'Joao';
is_null($b); //false

$c = null;
is_null($c); //false

// se a variável for inexistente, é apresentado um erro de tipo

is_null($d); // erro
