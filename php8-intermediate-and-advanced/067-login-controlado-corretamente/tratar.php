<?php

// verificar se é um POST
if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    die('Acesso negado.');
}

// verificar se existe usuáiro e senha
if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header('Location: index.html');
}

// verificar os dados do login
if ($_POST['usuario'] != 'joao' || $_POST['senha'] != '123'){
    echo 'Login inválido.';
    exit();
}
    echo 'Seja bem-vindo!!!!!';
