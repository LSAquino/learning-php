<?php

// RETURN

// A declaração return provoca o fim da execução do código de uma função, retornando ao local onde ela foi chamada.

function falar(){
    return;
    echo 'não vai ser apresentado este txt';
}

// Opcionalmente podemos usar o return para dvolvar um valor (como cálculos matemáticos por exemplo)


function adicionar ($a, $b){
    $resultado = $a + $b;
    return $resultado;

    # ou

    return $a + $b;
}

echo adicionar(10,20); # vai apresentar o valor 30


// outro exemplo

$nome = 'joao';
if (avaliar_nome($nome)) {
    echo 'O cliente está correto.';
}

function avaliar_nome($n){
    if ($n == 'joao') {
        return true;
    }else {
        return false;
    }
}

// uma função sem return devolve sempre um valor null