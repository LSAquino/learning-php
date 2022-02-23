<?php

// Uma função nunca pode ser chamada sem que os valores obrigatórios sejam fornecidos

function funcao($a, $b)
{
    // code...
}

# funcao ('teste');
// não funciona, só foi fornecido o valor de $a

// Porém, embora não seja muito frequente, podemos passar mais argumentos do que foi solicitado

function outraFuncao($a)
{
    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);
    echo " $x - $y - $z";

    echo '<br>';

    echo func_num_args(); #avalia quantos argumentos foram passados para a função.
}

outraFuncao(10, 20, 30);

echo '<br>';

// podemos usar um argumento especial designado por variadic parameter
function minhaFuncao(...$argumentos)
{
    foreach ($argumentos as $v) {
        echo "$v<br>";
    }
}

minhaFuncao(10, 20, 30, 40, 50);
