<?php

// trim
// remove espaços e outros caracteres do inicio e final de uma string

$a = " isto é uma string.    ";
// --------------------------------------
$a = trim($a); // "isto é uma string."



$a = " isto é uma string.    ";
// --------------------------------------
$b = trim($a); // $a = "isto é uma string."
// $b = "isto é uma string."



// --------------------------------------
echo trim($a); // apresenta o texto sem espaços do inicio ou fim da string.

// --------------------------------------
// ltrim e rtrim
// removem espaços e outros caracteres do inicio ou do fim da string

echo ltrim($a);   // "isto é uma string.   "
echo rtrim($a);   // " isto é uma string."

// --------------------------------------
// Podemos usar um segundo parâmetro nestas funções
$a = "abcdef";
echo trim($a,'a'); // "bcdef
echo trim($a,'af'); // "bcde
echo trim($a,'abef'); // "cd

// --------------------------------------
// por exemplo, apesar de existirem outras formas, podemos "limpar" o $_POST
$usuario = trim($_POST['usuario']);

// Não usem nas senhas. Elas podem conter propositalmente um espaço!


