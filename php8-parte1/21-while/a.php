<?php

// Cliclos / loops
// Existem 4 estruturas de ciclos em PHP.
// Elas existem para permitir executar um determinado bloco de código várias vezes.

// WHILE
// Definimos que a condição durante o ciclo deve continuar a ser executado.
// Quando essa condição for falsa, o ciclo termian e o código avança

$x = 1;
while ($x < 10) {
    echo 'ciclo em execução<br>';
    $x++;
}

echo '<hr>';

// outro exemplo
$i = 0;
while ($i < 10){
    echo $i++ . '<br>';
}

echo '<hr>';

// neste caso podemos remover as chaves 
$i = 0;
while ($i < 10) echo $i++ . '<br>';

// IMPORTANTE: Nunca esquecer a alteração da condição, caso contrário, teremos um ciclo infinito