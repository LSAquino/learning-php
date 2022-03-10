<?php
// criar instancia da classe EasyPDO

require_once('inc/config.php');
require_once('inc/EasyPDO.php');

// ligar à base de dados
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// buscar todos os contatos da base de dados
$contatos = $bd->select("SELECT * FROM dados");
// echo '<pre>';
// print_r($contatos);
// die();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver contatos</title>
</head>

<body>

    <h3>Contatos existentes</h3>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($contatos as $contato) : ?>

                <tr>
                    <th><?= $contato['nome'] ?></th>
                    <th><?= $contato['telefone'] ?></th>
                    <td><a href="editar_contato.php?id=<?= $contato['id_contato'] ?>">Editar</a></td>
                    <td><a href="deletar_contato.php?id=<?= $contato['id_contato'] ?>">Deletar</a></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <div>
        <a href="index.php">Voltar</a>
    </div>

</body>

</html>