<?php

define('MYSQL_OPTIONS', [
    'db_host' => 'localhost',
    'db_name' => 'contatos',
    'db_user' => 'user_contatos',
    'db_pass' => 'POy3T8w2',
    'db_char' => 'utf8',
]);

define('AES_KEY', 'SQuXRWZYHPAEt5o6qfAPiYd3M7eaBnze');
define('AES_IV', 'jRGSjd4l63nqxXsI');

function aes_encriptar($valor)
{
    return bin2hex(openssl_encrypt($valor, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
}

function aes_desencriptar($hash)
{
        // verifica se a hash é válida
        if(strlen($hash) % 2 != 0){
            return -1;
        }
        return openssl_decrypt(hex2bin($hash),'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV );
}
