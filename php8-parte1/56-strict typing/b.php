<?php

#STRICT TYPING

/*
É possível usar um tipo de declaração nullable, com isto, além do tipo de valor "normal" que a variável pode ter, também pode ter o valor nulo.
Usamos um prefixo ? antes do tipo de valor
*/

declare(strict_types=1);

function falar(?string $mensagem)
{
    echo $mensagem;
}

falar('Minha mensagem');
falar(null);    // também passa a ser possível

/*
Com o PHP 8 aparece a  possibilidade de definirmos mais que um tipo para o mesmo argumento. OS tipos pode mser separados por barras verticais
*/

function conversar(int|string $mensagem)
{
    echo $mensagem;
}

conversar('Olá Mundo!');
conversar(2500);

/* ou no caso dos tipos de retorno */

function calcular_quadrado_de(int|float $v1): int|float
{
    return $v1 * $v1;
    // return 'joao';
}

echo calcular_quadrado_de(25);
// echo calcular_quadrado_de('joao');