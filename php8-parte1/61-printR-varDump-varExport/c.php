<?php

// VAR_EXPORT

/*
Apresenta informação sobre uma variável num estilo que pode ser usado como código PHP.
*/

// $nome = "Joao";
// var_export($nome);

// echo '<br>';

// $valores = [1, 2, 3];
// var_export($valores);

// die();
// echo '<br>';

echo '<br>';
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(0, 100);
}
var_export($numeros);
