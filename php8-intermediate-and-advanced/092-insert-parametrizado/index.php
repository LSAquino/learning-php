<?php

use EasyPDO\EasyPDO;

require_once('libs/EasyPDO.php');
require_once('config.php');


$bd = new EasyPDO(MYSQL_1);

$nome_cliente = 'Antonio';

$parametros = [
    ':nome' => $nome_cliente
];

$bd->insert(" INSERT INTO clientes VALUES(0,:nome)", $parametros);

echo 'OK!';
