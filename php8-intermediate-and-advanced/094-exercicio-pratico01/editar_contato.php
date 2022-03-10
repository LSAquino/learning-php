<?php

// verifica se existe o id
if (!isset($_GET['id'])) {
    die('Acesso inválido.');
}

$id_contato = $_GET['id'];
// adicionar à base de dados
require_once('inc/config.php');
require_once('inc/EasyPDO.php');
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$parametros = [
    ':id_contato' => $id_contato
];
$contato = $bd->select("SELECT * FROM dados WHERE id_contato = :id_contato", $parametros)[0];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contato</title>
</head>

<body>
    <form action="editar_contatos_submit.php" method="post">
        <input type="hidden" name="id_contato" value="<?= $contato['id_contato'] ?>">
        <div>
            <label>Nome:</label>
            <input type="text" name="text_nome" maxlength="50" value="<?= $contato['nome'] ?>">
        </div>
        <div>
            <label>Telefone:</label>
            <input type="text" name="text_telefone" maxlength="20" value="<?= $contato['telefone'] ?>">
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>
        <div>
            <a href="ver_contatos.php">Cancelar</a>
        </div>
    </form>
</body>

</html>