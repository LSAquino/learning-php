<?php

require_once('config.php');
require_once('EasyPDO.php');

use EasyPDO\EasyPDO;


$bd = new EasyPDO();

$resultados = $bd->select("
SELECT 
AES_DECRYPT(nome, UNHEX(SHA2('" . AES_KEY . "',512))) nome,
AES_DECRYPT(telefone, UNHEX(SHA2('" . AES_KEY . "',512))) contato
FROM contatos"
);

echo '<pre>';
print_r($resultados);
