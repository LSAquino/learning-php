<?php

// FUNCTIONS / FUNÇÕES - PARÂMETROS

// PARÂMETROS OPCIONAIS

// Podemos criar funções que têm parâmetros com um valor pré definido.
// A chamada dessas funções não obriga a definir um argumento para esses parâmetros.

function multiplicar($a, $b = 2)
{
    // code...

    // $a será o valor passado no argumento
    // $b será:
    // O valor do argumento se ele for passado na chamada 
    //  valor 2 se não for passado argumento

    echo $a * $b;
}

multiplicar(10); # $a = 10 e $b = 2
echo '<br>';
multiplicar(10,20); # $a = 10 e $b = 20

// Os parâmetros opcionais devem ser definidos após os não-opicionais
function dividir($a = 2, $b){
    echo "$a e $b";
}
dividir (2,10);

#No PHP 7 ainda era possível fazer isso sem avisos, mas no PHP8, aparecerá um aviso.