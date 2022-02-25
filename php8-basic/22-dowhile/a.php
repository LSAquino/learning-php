<?php

// Cliclos / loops
// É muito semelhante ao ciclo WHILE, contudo, neste caso a condição é ativada após a execução do ciclo

$x = 0;
do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<hr>';

// de igual modo, quando só temos uma expressão a executar, podemos ignorar as chaves
$x = 0;
do
    echo $x++ . '<br>';
while ($x < 10);

echo '<hr>';

# ou
$x = 0;
do echo $x++ . '<br>'; while ($x < 10);
