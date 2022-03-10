<?php

use EasyPDO\EasyPDO;

require_once('libs/EasyPDO.php');
require_once('config.php');

$bd = new EasyPDO(MYSQL_1);

// update 
// $parametros = [
//     ':nome' => 'Cristina',
//     ':id' => 6
// ];

// $bd->update("UPDATE clientes SET nome = :nome WHERE id_cliente = :id",$parametros);

// delete
// $bd->delete("DELETE FROM clientes WHERE id_cliente = :id", [':id => 5']);
$bd->query("DELETE FROM clientes WHERE id_cliente = :id", [':id => 3']);

echo 'TERMINADO';
