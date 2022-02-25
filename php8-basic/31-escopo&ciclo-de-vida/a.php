<?php

// ESCOPO E CICLO DE UMA VARIÁVEL

// Normalmente uma variável de PHP passa a existir a partir do local onde é iniciada e existe até o final da página.
// No entando, quando temos variáveis dentro de uma função, elas tem um ciclo de vida limitado

$variavel = 10;

echo "<p>$variavel</p>";

funcao(20,30);

echo "<p>$a e $b</p>"; #estas variáveis existem somente dentro da função.

function funcao($a, $b){
    // echo "<p>$variavel</p>"; # esta variável não é conhecida dentro da função.
    echo "<p>$a e $b</p>";
}

function funcao2(){
    $v = 100;
}

funcao2();
echo "<p>$v</p>";


// global
// ------------------------------------
// Neste exemplo, a variável $a existe em dois escopos diferentes 
$a = 10;

function funcao3()
{
    // global $a;
    $a = 20;
}

funcao3();

echo "<p>$a</p>"; // $a= 10;

// ------------------------------------
// outro exemplo

$b = 100;

function funcao4(){
    $GLOBALS['b'] = 200;
}

funcao4();

echo "<p>$b</p>";


// no PHP as variáveis definidas dentro de loops ou instruções condicionais não são destruidas quando saem do escopo

if (true) {
    $a = 10;
}

echo "<p>$a</p>";

for ($i=0; $i < 10; $i++) { 
    $x = 1000;
}

echo "<p>$i e $x</p>";