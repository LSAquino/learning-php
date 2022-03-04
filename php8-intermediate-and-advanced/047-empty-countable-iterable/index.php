<?php

// ARRAYS - VERIFICAR SE É UM ARRAY E OUTROS DADOS 

/*
Uma questão que devemos ter em conta é que as funções para operar arrays não podem ser usadas noutro tipo de dados. Neste caso, antes de usarmos uma função para um array, teremos que ter a certeza que estamos a usar um array.
*/

// $valor = 'Joao';
$valor = [1,2,3];
if(is_array($valor)){
    echo 'É um array';
}else{
    echo 'Não é um array';
}

echo PHP_EOL;
 
// A expressão empty() pode ser usada em strings, em variáveis com valor null ou em arrays para determinar se estão vazios.
$valor = null;
$nome = '';
$valores = [1,2,3];
echo (int)empty($valor);
echo PHP_EOL;

// Existe ainda a expressão is_contable() ára verificar se uma determinada variável é "contável" ou não. 
// Esta função foi introduzida no PHP 7.3

echo (int)is_countable($valores);

// E ainda a partir do php 7.1, é possível usar uma outra função designada por is_iterable()
// iterável significa que pode ser colocado num ciclo foreach por exemplo
echo (int)is_iterable($valores);