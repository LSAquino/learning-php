<?php


// FUNÇÕES ANÔNIMAS

// A função não tem nome e pode ser definida como o valor a atribuir uma variável

$a = function(){
    echo '<p>Olá!</p>';
};

$a();


// ------------------------------------
// outro exemplo

$falar = function($mensagem){
    echo "<p>Eu digo: $mensagem</p>";
};

$falar('Estou aqui!');


// ------------------------------------
// e ainda outro exemplo

$andar = function($metros){
    return "Andei $metros metros";
};

echo $andar(100);