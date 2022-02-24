<?php

// TYPE DECLARATIONS

/*
Quando dissemos que o php não é uma linguagem tipificada, não é exatamente assim. 
É possível especificar claramente que tipo de valores podemos usar para parâmetros de funções, propriedades de classes e tipos de retorno de funções.

Vejamos no caso de um array como parâmetro de uma função:
*/

function falar(array $mensagem){
    echo $mensagem;
}

// falar('joao'); // não é possível.

// ----------------------------------------------

function conversar (string $mensagem){
    echo $mensagem;
}

// aqui vai ser feita uma conversão de inteiro para string
conversar(2500);

// conversar(['a']); //não é possível