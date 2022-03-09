<?php

require_once('libs/EasyPDO.php');

use EasyPDO\EasyPDO;

$gestor = new EasyPDO();

$clientes = $gestor->select("SELECT * FROM clientes");

echo '<pre>';
print_r($clientes);
