<?php
session_start();

echo '<pre>';

// adicionar variáveis a uma sessão 
$_SESSION['nome'] = 'joao';
$_SESSION['valor'] = 1000;
$_SESSION['frutas'] = ['banana', 'laranja', 'abacaxi'];
print_r($_SESSION);
echo '<hr>';

// remover variáveis de uma sessão
unset($_SESSION['valor']);
print_r($_SESSION);
echo '<hr>';

// alterar o valor de uma variável de sessão
$_SESSION['nome'] = 'Ribeiro';
print_r($_SESSION);
echo '<hr>';

// apresentar variáveis de sessão
echo 'Nome: ' . $_SESSION['nome'] . '<br>';
echo 'Uma fruta: ' . $_SESSION['frutas'][1] . '<br>';
echo '<hr>';

// destruir todos os dados de uma sessão
// session_destroy();
// print_r($_SESSION);