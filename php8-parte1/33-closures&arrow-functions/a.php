<?php

// FUNÇÕES CLOSURE

// São funções anônimas que podem usar variáveis do escopo global

$x = 20;
$y = 30;

$minhaClosure = function ($z) use ($x, $y) {
    echo "$z-$x-$y";
    $y += 1000; #esta instrução não vai alterar o valor de $y
};

$minhaClosure(10);

echo "<p>$y</p>"; # o valor de $y não foi alterado na closure


// -------------------------------------
// ARROW FUNCTIONS

$x = 20;
$y = 30;

$minhaFuncao = fn($z) => "$x - $y - $z";

$minhaFuncao(10);

// usam a palavra reservada fn e não necessitam de return ou chave