<?php

use EasyPDO\EasyPDO;

require_once('libs/EasyPDO.php');
require_once('config.php');


$bd_teste = new EasyPDO(MYSQL_1);
$bd_loja = new EasyPDO(MYSQL_2);

$clientes = $bd_teste->select("SELECT * FROM clientes");
$produtos = $bd_loja->select("SELECT * FROM produtos");
echo '<pre>';
print_r($clientes);
print_r($produtos);
