<?php
$valor = 425.7;

// apesar de existirem outras funções para isso, podemos usar o formato para apesentar valores monetários.


// echo "O valor total da compra foi de $valor $";
// echo '<br>';
// echo sprintf("O valor total da compra foi de %01.2f $", $valor);
// printf("O valor total da compra foi de %01.2f $", $valor); // tem o memso efeito de -> echo sprintf();

// o $0 define o valor de preenchimento. O valor inteiro imediatamente a seguir define a quantidade
// o . indica a separação para casas decimais e o 2f determina que devem sempre ser apresentados 2 casas decimais.


// -----------------------------
// apresentação no console/terminal
// echo sprintf("%'_20d",$valor);


$valores = [
    23.35,
    456.258,
    7.1,
    123
];
foreach ($valores as $valor) {
    echo sprintf("O preço é: %'.30.2f $", $valor) . PHP_EOL;
}
