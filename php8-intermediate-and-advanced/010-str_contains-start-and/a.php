<?php

/*
Nas regras de negócio do nosso código vamos necessitar usar funções que permitem verificar qual o conteúdo de uma string.
Se contém outra string, se começa pela letra X, termina com Y ou quantas letras 'A' tem pelo meio

O PHP oferece várias funções par essa finalidade
*/

$a = 'Esta frase é usada para testes.';

// str_contains - verifica se uma string existe dentro de outra - retorna true ou false

// ------------------------------
$b = 'para';
if (str_contains($a, $b)) {
    echo 'sim'; // <<<<
} else {
    echo 'nao';
}
echo '<br>';

// ------------------------------
$c = "USA";
if (str_contains($a, $c)) {
    echo 'sim'; // <<<<
} else {
    echo 'nao';
}
echo '<br>';

// ------------------------------
$c = "ua";
if (str_contains($a, $c)) {
    echo 'sim';
} else {
    echo 'nao'; // <<<<
}
echo '<br>';

// Para percebermos se uma string começa ou acaba com uma determinada string
// usamos as funções str_ends_with() e str_starts_with()
// ambas são case sensitive

$a = 'Esta frase é usada para testes.';
if(str_starts_with($a, 'E')){
    echo 'sim'; // <<<<
}else{
    echo 'nao'; 
}
echo '<br>';

// -------------------------------------

$a = 'Esta frase é usada para testes.';
if(str_ends_with($a, 'tes.')){
    echo 'sim'; // <<<<
}else{
    echo 'nao'; 
}
echo '<br>';

// Estas funções são destinadas cada uma à sua função especifica 
// contudo, existe uma função que "unifica" todas estas: preg_match(). Veremos mais pra frente