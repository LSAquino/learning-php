<?php

// FUNCTIONS / FUNÇÕES - PARÂMETROS

// Como vimos atrás, uma função tem um nome e um conjunto de parênteses. 
// Dentro desses parênteses, nós podemos definir um conjunto de parâmetros (assinatura da função)
// Vejamos o exemplo:

function adicao ($a,$b){
    // code...
}

// Nesta função adicao, temos dois parâmetros $a e $b.
// São duas variáveis de PHP que vão existir dentro da função.
// Os parâmetros permitem passar valores para o interior de uma função quando ela é chamada
// Os parâmetros são separados por virgulas.

adicionar (10,20);

function adicionar ($a, $b){
    echo "$a + $b = " . $a + $b; # no PHP 7 emite um aviso.
    echo '<br>';
    echo "$a + $b = " . ($a + $b);
}

echo '<br>';

# No PHP 8 já não são necessários os parênteses nas operações.

$nomes = ['Joao', 'Ana', 'Carlos'];

foreach($nomes as $nome){
    saudacao ($nome);
}

function saudacao ($valor){
    echo "Bom dia, $valor.<br>";
}

# Para ser mais preciso, parâmetros é o nome das variáveis existentes na definição da função.
# Argumentos são os dados passados quando a função é chamada.