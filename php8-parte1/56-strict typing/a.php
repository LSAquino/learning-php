<?php

#STRICT TYPING

/*  
O comportamento do PHP é tentar converter os tipos declarados.
*/

function falar(string $mensagem){
    echo $mensagem;
}

falar('Ola Mundo'); // é possível
falar(2500);       // é possível
function somar (int $v1, int $v2){
    return $v1 + $v2;
}

echo somar(10,20);      // é possível
echo somar('a','b');   // é possível

/*
Mas podemos "obrigar" o PHP a seguir a regra estritamente definida.
*/

// declare(strict_types=1); # se usada (lá em cima), passa a restringir