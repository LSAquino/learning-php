<?php

// verificar se foi feito um post
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// buscar os dados a editar
$id_contato = $_POST['id_contato'];
$nome = $_POST['text_nome'];
$telefone = $_POST['text_telefone'];

// abrir a base de dados
require_once('inc/config.php');
require_once('inc/EasyPDO.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$parametros = [
    ':id_contato' => $id_contato,
    ':nome' => $nome,
    ':telefone' => $telefone
];

$bd->update("UPDATE dados SET nome = :nome, telefone = :telefone WHERE id_contato = :id_contato", $parametros);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Contato atualizado com sucesso</h3>
    <a href="ver_contatos.php">Voltar</a>
</body>
</html>
