<?php

// NUMBER_FORMAT
// Apresenta um número formatado de várias formas

/*
A assinatura dessa função é constituída por 4 parâmetros.
$num               - o valor que pretendemos formatar.
$decimals          - o número de casas decimais a apresentar.
$dec_point         - o caracter que vai ser apresentado  para separar a parte inteira da parte decimal
$thousands_sep     - o caracter que irá ser apresentado na separação do número de milhares.
*/

$valor = 100;
echo number_format($valor, 0, null, null); // vai usar os valores por default
// 100

echo number_format($valor, 2, ',', null);
// 100,00

$valor = 100.45;
echo number_format($valor, 3, ',', null);
// 100,450

echo number_format($valo, 1, ',', null);
// 100,5


$valor = 123456.758;
echo number_format($valor, 2, ',', '.');
// 123.456,76

// É uma das formas mais indicadas para apresentar valores monetários

$valor = 125.2;
echo number_format($valor,2,',',null) . '$';
// 125,20 $