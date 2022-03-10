<?php

// verificar se foi feito um post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// adicionar à base de dados
require_once('inc/config.php');
require_once('inc/EasyPDO.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// parâmetros
$parametros = [
    ':nome' => $_POST['text_nome'],
    ':telefone' => $_POST['text_telefone'],
];

$bd->insert("INSERT INTO dados VALUES(0,:nome,:telefone)", $parametros);


echo 'Contato inserido com sucesso';
?>
<div><a href="index.php">Voltar</a></div>