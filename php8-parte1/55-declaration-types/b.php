<?php

// TYPE DECLARATIONS

/*
O tipo callable tem que ser uma função, método ou objeto.
Podemos, por exemplo, usar uma função anônima.
*/

$falar = function ($mensagem) {
    echo 'A minha mensagem é: ' . $mensagem;
};

function minha_funcao(callable $funcao, $dados){
    $funcao($dados);
}

minha_funcao($falar, 'Esta é minha mensagem.');