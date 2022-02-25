<?php

// MAIÚSULAS E MINÚSCULAS

// O PHP contém algums funções para transformar as strings 

$a = "joao ribeiro";
$b = "ANA CAROLINA";
$c = "Francisco Santos";

// ----------------------------------------
// strtoupper - transformar uma string para maiúsculas

echo strtoupper($a); // JOAO RIBEIRO
echo strtoupper($c); // FRANCISCO SANTOS

$a = "João Luis";
echo strtoupper($a); // JOãO LUíS
echo mb_strtoupper($a); // JOÃO LUÍS

// ----------------------------------------
// strlower - transformar uma string para minúsculas 
echo strtolower($b); // ana carolina
echo strtolower($c); // francisco santos

// de igual modo, existe a função mb_strlower()

// ----------------------------------------
// ucfirst - transforma a primeira letra de um string em maiúscula
echo ucfirst('joão luís'); // João luís
echo ucfirst('indice');   // índice

// ----------------------------------------
// lcfirst - transforma a primeira letra de um string em minúscula
echo lcfirst('João Ribeiro'); // joão Ribeiro

// ----------------------------------------
// ucwords - transforma a primeira letra de cada palavra de um string em maiúscula

echo ucwords('joão ribeiro'); // João Ribeiro

