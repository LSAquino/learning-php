<?php

require_once '../config.php';

// definição da ligação
$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
        "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);

// utilização de queries parametrizadas (segurança contra SQL Injection)
$nome_do_cliente = "Carlos Silva";

$comando = $gestor->prepare("INSERT INTO clientes VALUES(0, :nome)");
$comando->execute(
    [
        'nome' => $nome_do_cliente
    ]
);
