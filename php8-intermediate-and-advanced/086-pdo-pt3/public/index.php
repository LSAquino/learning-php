<?php

require_once '../config.php';

// definição da ligação
$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);
$dados = $gestor->query("SELECT * FROM clientes");
$clientes = $dados->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>CLIENTE</h3>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>ID cliente</th>
                <th>nome</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($clientes as $cliente) : ?>

                <tr>
                    <td><?= $cliente['id_cliente'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

    <p>Total clientes: <strong><?= count($clientes) ?></strong></p>
</body>

</html>