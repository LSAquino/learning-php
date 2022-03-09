<?php

require_once '../config.php';

// definição da ligação
$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" .
    "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);

// select
// $clientes = $gestor->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($clientes);

// insert
// $gestor->query("INSERT INTO clientes VALUES(0,'Francisco)")

// update
// $gestor->query("UPDATE clientes SET nome = 'Antonio Manuel' WHERE id_cliente = 3")

// delete
$gestor->query("DELETE FROM  clientes WHERE id_cliente = 3")
?>
